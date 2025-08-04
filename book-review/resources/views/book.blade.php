
   @extends('layout.app')
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

