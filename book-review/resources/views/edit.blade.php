<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7fa; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 32px; }
        h1 { color: #2a5298; text-align: center; margin-bottom: 32px; }
        form { display: flex; flex-direction: column; gap: 18px; }
        label { font-weight: bold; color: #2a5298; }
        input, select { padding: 8px; border-radius: 6px; border: 1px solid #ccc; }
        button { background: #2a5298; color: #fff; border: none; padding: 12px; border-radius: 6px; font-weight: bold; cursor: pointer; }
        button:hover { background: #1e3c72; }
        .back-link { display: block; margin-top: 32px; text-align: center; color: #2a5298; text-decoration: none; font-weight: bold; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Book</h1>
        <form method="POST" action="{{ route('book.update', $book->id) }}">
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>

            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" required>

            <label for="year">Year</label>
            <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}" min="1000" max="9999" required>

            <label for="genre">Genre</label>
            <select id="genre" name="genre" required>
                @foreach(['Classic', 'Dystopian', 'Romance', 'Fantasy', 'Adventure', 'Historical'] as $genre)
                    <option value="{{ $genre }}" @if(old('genre', $book->genre) == $genre) selected @endif>{{ $genre }}</option>
                @endforeach
            </select>

            <button type="submit">Update Book</button>
        </form>
        <a href="{{ route('books.index') }}" class="back-link">&larr; Back to Book List</a>
    </div>
</body>
</html>
