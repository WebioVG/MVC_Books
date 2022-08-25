<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Cart;
use M2i\Mvc\Controller\Controller;
use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class CartController extends Controller
{
    public function add($id)
    {
        $cart = new Cart();        
        $cart->add((int) $id, 1);
        $books = Book::all();

        return View::render('book/list', [
            'books' => $books
        ]);
    }

    public function list()
    {
        $cart = new Cart();        
        $booksInCart = $cart->books();

        return View::render('cart/list', [
            'books' => $booksInCart
        ]);
    }
}