<?php

use Illuminate\Support\Facades\Route;

use App\Models\Book;
   $books = [
        new Book(1, 'To Kill a Mockingbird', 'Harper Lee', 1960, 'Classic'),
        new Book(2, '1984', 'George Orwell', 1949, 'Dystopian'),
        new Book(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Classic'),
        new Book(4, 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Classic'),
        new Book(5, 'Pride and Prejudice', 'Jane Austen', 1813, 'Romance'),
        new Book(6, 'The Hobbit', 'J.R.R. Tolkien', 1937, 'Fantasy'),
        new Book(7, 'Moby-Dick', 'Herman Melville', 1851, 'Adventure'),
        new Book(8, 'War and Peace', 'Leo Tolstoy', 1869, 'Historical'),
        new Book(9, 'The Alchemist', 'Paulo Coelho', 1988, 'Adventure'),
        new Book(10, 'Brave New World', 'Aldous Huxley', 1932, 'Dystopian'),
    ];

Route::get('/', function () use ($books) {
    return view('index', compact('books'));
})->name('book.index');


Route::get('/book/{id}', function ($id) use ($books) {
    $book = collect($books)->firstWhere('id', (int)$id);
    if (!$book) {
        abort(404);
    }
    return view('book', compact('book'));
})->name('book.show');

// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });
