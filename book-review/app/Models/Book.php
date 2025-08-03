<?php

namespace App\Models;

class Book
{
    public $id;
    public $title;
    public $author;
    public $year;
    public $genre;

    public function __construct($id, $title, $author, $year, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }
}
