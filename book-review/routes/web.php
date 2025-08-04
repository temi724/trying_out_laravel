

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

use App\Models\Book;
use App\Models\NewBooks;
//    $books = [
//         new Book(1, 'To Kill a Mockingbird', 'Harper Lee', 1960, 'Classic'),
//         new Book(2, '1984', 'George Orwell', 1949, 'Dystopian'),
//         new Book(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Classic'),
//         new Book(4, 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Classic'),
//         new Book(5, 'Pride and Prejudice', 'Jane Austen', 1813, 'Romance'),
//         new Book(6, 'The Hobbit', 'J.R.R. Tolkien', 1937, 'Fantasy'),
//         new Book(7, 'Moby-Dick', 'Herman Melville', 1851, 'Adventure'),
//         new Book(8, 'War and Peace', 'Leo Tolstoy', 1869, 'Historical'),
//         new Book(9, 'The Alchemist', 'Paulo Coelho', 1988, 'Adventure'),
//         new Book(10, 'Brave New World', 'Aldous Huxley', 1932, 'Dystopian'),
//     ];


Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::get('/books', function ()  {
    $books = NewBooks::latest()->paginate(10);
    return view('index', compact('books'));
})->name('books.index');

// Show create book form
Route::view('/book/create', 'create')->name('book.create');

// Get book by ID and show in view
Route::get('/book/{id}', function ($id) {
    $book = NewBooks::find($id);
    if (!$book) {
        abort(404);
    }
    return view('book', compact('book'));
})->name('book.show');

// Save new book in DB...
Route::post('/books', function (BookRequest $request) {
    $book = NewBooks::create($request->validated());
    return redirect()->route('book.show', $book)->with('success', 'Book created successfully!');
})->name('book.store');

// Get book by ID and show in view
Route::get('/book/{id}/edit', function ($id) {
    $book = NewBooks::findOrFail($id);
    return view('edit', compact('book'));
})->name('book.edit');

// Update book in DB
Route::put('/book/{id}', function (BookRequest $request, $id) {
    $book = NewBooks::findOrFail($id);
    $book->update($request->validated());
    return redirect()->route('book.show', $book)->with('success', 'Book updated successfully!');
})->name('book.update');

// Delete book from DB
Route::delete('/book/{id}', function ($id) {
    $book = NewBooks::findOrFail($id);
    $book->delete();
    return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
})->name('book.delete');



// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });
