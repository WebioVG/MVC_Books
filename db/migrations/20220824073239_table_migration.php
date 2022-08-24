<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TableMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('book')
            ->addColumn('title', 'string')
            ->addColumn('price', 'integer')
            ->addColumn('isbn', 'string')
            ->addColumn('author', 'string')
            ->addColumn('releasedAtYear', 'integer')
            ->addColumn('image', 'string')
            ->create();
    }
}
