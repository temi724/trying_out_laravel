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
        .alert-danger{
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }


    </style>
@endsection
@section('content')
    <div class="container">
        <h1>Create New Book</h1>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" >
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group ">
                <label for="year">Year</label>
                <input type="number" id="year" name="year" class="form-control" >
                 @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre" class="form-control" >
                @error('genre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Book</button>
        </form>
        <a href="{{ route('books.index') }}" class="back-link">&larr; Back to Book List</a>
    </div>
@endsection
