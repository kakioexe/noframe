<?php

namespace App\Model;

class Book
{
    public function __construct(public string $title, public string $authors, public string $content, public string $publishDatetime)
    {}
}