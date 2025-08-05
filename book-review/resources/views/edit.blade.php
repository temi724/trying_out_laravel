@extends('layout.app')

@section('styles')
    <style>
        /* Additional custom styles if needed */
    </style>
@endsection

@section('content')
    <div class="container mx-auto max-w-xl bg-white rounded-lg shadow-lg p-8 mt-8">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Edit Book</h1>
        <form method="POST" action="{{ route('book.update', $book->id) }}" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-blue-800 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                @error('title')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="author" class="block text-blue-800 font-semibold mb-2">Author</label>
                <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                @error('author')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="year" class="block text-blue-800 font-semibold mb-2">Year</label>
                <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}" min="1000" max="9999" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                @error('year')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="genre" class="block text-blue-800 font-semibold mb-2">Genre</label>
                <select id="genre" name="genre" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                    @foreach(['Classic', 'Dystopian', 'Romance', 'Fantasy', 'Adventure', 'Historical'] as $genre)
                        <option value="{{ $genre }}" @if(old('genre', $book->genre) == $genre) selected @endif>{{ $genre }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="text-red-600 font-semibold mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-800 text-white py-3 rounded font-bold hover:bg-blue-900 transition">Update Book</button>
        </form>
        <a href="{{ route('books.index') }}" class="block text-blue-800 font-bold mt-8 text-center hover:underline">&larr; Back to Book List</a>
    </div>
@endsection
