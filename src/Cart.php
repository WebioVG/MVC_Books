<?php

namespace M2i\Mvc;

use M2i\Mvc\Model\Book;

class Cart
{
    private $cart;

    public function __construct()
    {
        $this->cart = $_SESSION['cart'] ?? [];
    }

    public function add($id, $quantity)
    {
        if (! empty($this->cart)) {
            foreach ($this->cart as $index => $item) {
                if ($item['book'] === $id) {
                    $_SESSION['cart'][$index]['quantity'] += $quantity;
                    return $_SESSION['cart'];
                }
            }
        }
        
        array_push($_SESSION['cart'], [
            'book' => $id,
            'quantity' => $quantity
        ]);
    }

    public function books()
    {
        $books = [];

        if (! empty($this->cart)) {
            foreach ($this->cart as $item) {
                array_push($books, [
                    'book' => Book::find($item['book']),
                    'quantity' => $item['quantity'] 
                ]);
            }
        }

        return $books;
    }

    public function price($inputItem)
    {
        $items = $this->books();
        
        foreach ($items as $item) {
            if ($item['book']->id === $inputItem->id) {
                return $item['book']->price * $item['quantity'] * 1.2;
            }
        }
    }

    public function total()
    {
        $items = $this->books();

        $total = array_sum(array_map(function($item) {
            return $item['book']->price * $item['quantity'] * 1.2;
        }, $items));

        return $total;
    }

    public function delete($id)
    {
        foreach ($this->cart as $key => $item) {
            if ($item['book'] === (int) $id) {
                array_splice($_SESSION['cart'], $key, 1);
                return $_SESSION['cart'];
            }
        }
    }
}