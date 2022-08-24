<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\Model\Model;

class Book extends Model
{
    protected $id;
    protected $title;
    protected $price;
    protected $isbn;
    protected $author;
    protected $releasedAtYear;
    protected $image;
}