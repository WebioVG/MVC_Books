<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Controller\Controller;
use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController extends Controller
{
    public function list()
    {
        $books = Book::all();

        return View::render('book/list', [
            'books' => $books
        ]);
    }
}