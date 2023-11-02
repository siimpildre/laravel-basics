<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index()
    {
        return view("books.index", [
            "books" => Book::paginate(20),
        ]);
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', [

            'book' => $book,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        return view('books.edit', [

            'book' => $book,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {

        $validated = $request->validate([

            'title' => 'required|string|max:255',
            'release_date' => 'required|integer|between:1901,2155',
            'price' => 'required|decimal:2',
            //'stock_saldo' => 'required|string|max:45',
            //'pages' => 'required|int:11',
            //'type' => 'required|string|max:255',
        ],
        [
            'release_date.required' => 'The release year field is required',
            'release_date.between' => 'The release year field must be between 1901 and 2155'

        ]);

        $book->update($validated);

        return redirect(route('books.index'));
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
