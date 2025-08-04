
   @extends('layout.app')
   @section('styles')
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7fa; margin: 0; padding: 0; }
        .container { max-width: 1000px; margin: 40px auto; background: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 32px; }
        h1 { color: #2a5298; text-align: center; margin-bottom: 32px; }
        .details { font-size: 1.2rem; }
        .label { font-weight: bold; color: #2a5298; }
        .back-link { display: block; margin-top: 32px; text-align: center; color: #2a5298; text-decoration: none; font-weight: bold; }
        .back-link:hover { text-decoration: underline; }
    </style>
   @endsection
   @section('content')
   <div class="container">
        <h1>Book Details</h1>
        <div class="details">
            <p><span class="label">Title:</span> {{ $book->title }}</p>
            <p><span class="label">Author:</span> {{ $book->author }}</p>
            <p><span class="label">Year:</span> {{ $book->year }}</p>
            <p><span class="label">Genre:</span> {{ $book->genre }}</p>
        </div>
        <a href="{{ route('books.index') }}" class="back-link">&larr; Back to Book List</a>
    </div>
    @endsection

