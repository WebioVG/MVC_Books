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
        
        $this->redirect(BASE_URL.'/list');
    }

    public function list()
    {
        $cart = new Cart();        
        $booksInCart = $cart->books();

        return View::render('cart/list', [
            'books' => $booksInCart,
            'cart' => $cart
        ]);
    }

    public function delete($id)
    {
        $cart = new Cart();
        $cart->delete($id);

        $this->redirect(BASE_URL.'/cart/list');
    }
}