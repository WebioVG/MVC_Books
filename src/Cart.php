<?php

namespace M2i\Mvc;

class Cart
{
    public function add($id, $quantity)
    {
        $cart = $_SESSION['cart'];

        if (! empty($cart)) {
            foreach ($cart as $index => $item) {
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
}