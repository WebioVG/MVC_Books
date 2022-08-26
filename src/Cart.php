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
                return $item['book']->price * $item['quantity'];
            }
        }
    }
}