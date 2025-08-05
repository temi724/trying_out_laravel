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
    <div class="container mx-auto max-w-xl bg-white rounded-lg shadow-lg p-8 mt-8">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Create New Book</h1>
        <form action="{{ route('book.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-blue-800 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ old('title') }}">
                @error('title')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="author" class="block text-blue-800 font-semibold mb-2">Author</label>
                <input type="text" id="author" name="author" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ old('author') }}">
                @error('author')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="year" class="block text-blue-800 font-semibold mb-2">Year</label>
                <input type="number" id="year" name="year" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ old('year') }}">
                @error('year')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="genre" class="block text-blue-800 font-semibold mb-2">Genre</label>
                <input type="text" id="genre" name="genre" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300" value="{{ old('genre') }}">
                @error('genre')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-800 text-white py-3 rounded font-bold hover:bg-blue-900 transition">Create Book</button>
        </form>
        <a href="{{ route('books.index') }}" class="block text-blue-800 font-bold mt-8 text-center hover:underline">&larr; Back to Book List</a>
    </div>
@endsection
