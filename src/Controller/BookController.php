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
        $book = new Book();
        $book->title = $_POST['title'] ?? null;
        $book->price = $_POST['price'] ?? null;
        $book->isbn = $_POST['isbn'] ?? null;
        $book->author = $_POST['author'] ?? null;
        $book->releasedAtYear = $_POST['releasedAtYear'] ?? null;
        $book->image = $_FILES['image'] ?? '';
        $errors = [];
        $success = false;

        if (! empty($_POST)) {
            if (empty($book->title)) {
                $errors['title'] = 'The title is required';
            }
            if (empty($book->price)) {
                $errors['price'] = 'The price is required';
            }
            if (empty($book->isbn)) {
                $errors['isbn'] = 'The isbn is required';
            }
            if (empty($book->author)) {
                $errors['author'] = 'The author is required';
            }
            if (empty($book->releasedAtYear)) {
                $errors['releasedAtYear'] = 'The year of release is required';
            }
            if ($book->image !== '' && $book->image['type'] !== '') {
                if ($book->image['type'] !== 'image/png' && $book->image['type'] !== 'image/jpg' && $book->image['type'] !== 'image/jpeg') {
                    $errors['image'] = 'Images can only be .png, .jpg or .jpeg.';
                }
                if ((int) ($book->image['size']) > 30000) {
                    $errors['image'] = 'The image is too big.';
                }
            }

            if (empty($errors)) {
                if ($book->image) {
                    $imagesDirectory = __DIR__.'/../../img/';
                    $name = basename($book->image['name']);
                    move_uploaded_file($book->image['tmp_name'], "$imagesDirectory/$name");

                    $book->image = 'img/'.$book->image['name'];
                }

                $success = $book->save();
            }
        }
        
        return View::render('book/add', [
            'errors' => $errors,
            'success' => $success
        ]);
    }

    public function edit($id)
    {
        $book = Book::find(($id));

        if (! $book) {
            return $this->notFound();
        }

        $book->title = $_POST['title'] ?? $book->title;
        $book->price = $_POST['price'] ?? $book->price;
        $book->isbn = $_POST['isbn'] ?? $book->isbn;
        $book->author = $_POST['author'] ?? $book->author;
        $book->releasedAtYear = $_POST['releasedAtYear'] ?? $book->releasedAtYear;
        $errors = [];
        $success = false;

        if (! empty($_POST)) {
            if (empty($book->title)) {
                $errors['title'] = 'The title is required';
            }
            if (empty($book->price)) {
                $errors['price'] = 'The price is required';
            }
            if (empty($book->isbn)) {
                $errors['isbn'] = 'The isbn is required';
            }
            if (empty($book->author)) {
                $errors['author'] = 'The author is required';
            }
            if (empty($book->releasedAtYear)) {
                $errors['releasedAtYear'] = 'The year of release is required';
            }

            if (empty($errors)) {
                $success = $book->edit($book->id);
            }
        }

        return View::render('book/edit', [
            'book' => $book,
            'errors' => $errors,
            'success' => $success
        ]);
    }

    public function delete($id)
    {
        $book = Book::find($id) ?? null;

        if ($book) {
            Book::delete($id);
        }

        $this->redirect(BASE_URL.'/list');
    }
}