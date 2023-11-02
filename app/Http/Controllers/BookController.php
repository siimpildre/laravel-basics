<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view("books.index", [
            "books" => Book::paginate(20),
        ]);
    }

    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
