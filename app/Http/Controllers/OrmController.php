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
        //$authors = author::find(1);
        //return $authors->books;

        // 2. Obtener el autor de un libro (book -> author)
        //$books = book::find(1);
        //return $books->author;

        // 3. Obtener las copias de un libro (book -> copies)
        //$books = book::find(1);
         //return $books->copies;

        // 4. Obtener el libro de una copia (copy -> book)
        // $copies = copy::find(1);
        // return $copies->book;

        // 5. Obtener los usuarios que tienen una copia (copy -> users)
        // $copies = copies::find(1);
        // return $copy->users;

        // 6. Obtener las copias que tiene un usuario (user -> copies)
        // $user = user::find(1);
        // return $user->copies;
    }
}
