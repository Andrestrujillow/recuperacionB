<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\copy;
use App\Models\user;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas()
    {
        // 1. Obtener los libros escritos por un autor (author -> books)
         //$author = author::find(1);
         //return $author->books;

        // 2. Obtener el autor de un libro (book -> author)
        $book = book::find(1);
        return $book->author;

        // 3. Obtener las copias de un libro (book -> copies)
        // $book = book::find(1);
        // return $book->copies;

        // 4. Obtener el libro de una copia (copy -> book)
        //$copy = copy::find(1);
        //return $copy->book;

        // 5. Obtener los usuarios que tienen una copia (copy -> users)
        // $copy = copy::find(1);
        // return $copy->users;

        // 6. Obtener las copias que tiene un usuario (user -> copies)
        // $user = user::find(1);
        // return $user->copies;
    }
}
