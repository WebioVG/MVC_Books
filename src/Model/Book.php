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

    /**
     * Returns the price of the book according to the given tax (percentage).
     * ex: $taxedPrice = $book->getPriceWithTaxes(20);
     */
    public function getPriceWithTaxes($tax)
    {
        return $this->price * (1 + $tax * 0.01);
    }
}