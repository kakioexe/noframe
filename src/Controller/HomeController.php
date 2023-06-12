<?php

namespace App\Controller;

use App\Model\Book;

class HomeController
{
    public function index()
    {
        $data = json_decode(file_get_contents(ROOT_PATH . "data/books.json"), true);
        
        foreach ($data as $book) {
            $books[] = new Book(...$book);
        }

        $this->view("book/index.php", compact("books"));
    }

    public function view($file, $data)
    {
        extract($data);
        $viewPath = dirname(__DIR__) . "/views/" . $file;
        include $viewPath;
    }
}