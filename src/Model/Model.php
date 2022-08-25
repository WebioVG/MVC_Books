<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\DB;

class Model
{
    private $attributes = [];

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __isset($attribute)
    {
        return $this->__get($attribute);
    }

    public function save()
    {
        $table = self::getTable();

        $columns = implode(', ', array_keys($this->attributes));
        $values = implode(', ', array_map(function () {
            return '?';
        }, $this->attributes));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        return DB::insert($sql, array_values($this->attributes));
    }

    public function edit($id)
    {
        $table = self::getTable();

        $columns = implode('=?, ', array_keys($this->attributes));
        $columns .= '=?';

        $sql = "UPDATE $table SET $columns WHERE id = ?";

        $bindings = array_values($this->attributes);
        array_push($bindings, $id);

        return DB::update($sql, $bindings);
    }

    public static function delete($id)
    {
        $table = self::getTable();

        $sql = "DELETE FROM $table WHERE id = ?";

        return DB::delete($sql, $id);
    }

    public static function all()
    {
        $table = self::getTable();

        $sql = "SELECT * FROM $table";

        return DB::select($sql, [], static::class);
    }

    public static function find($id)
    {
        $table = self::getTable();

        $sql = "SELECT * FROM $table WHERE id = :id";

        return DB::selectOne($sql, ['id' => $id], static::class);
    }

    /**
     * Returns the table name.
     */
    private static function getTable()
    {
        return strtolower(substr(strrchr(get_called_class(), '\\'), 1));
    }
}
