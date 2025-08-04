@extends('layout.app')
@section('content')
    <div class="container">
        <h1>Create New Book</h1>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>
            <div class="form-group      ">
                <label for="year">Year</label>
                <input type="number" id="year" name="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Book</button>
        </form>
        <a href="{{ route('books.index') }}" class="back-link">&larr; Back to Book List</a>
    </div>
@endsection
