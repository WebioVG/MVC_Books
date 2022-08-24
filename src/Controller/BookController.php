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

    public function show($id)
    {
        $book = Book::find($id) ?? null;

        if (! $book) {
            return $this->notFound();
        }

        return View::render('book/show', [
            'book' => $book
        ]);
    }

    public function add()
    {
        return View::render('book/add');
    }
}