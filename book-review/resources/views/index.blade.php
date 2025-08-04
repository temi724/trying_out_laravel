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
                table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
        th, td { padding: 12px 8px; border-bottom: 1px solid #e0e0e0; text-align: left; }
        th { background: #2a5298; color: #fff; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background: #f0f4fa; }

    </style>


@endsection
@section('content')


    <div class="container">
        <h1>Book List</h1>
        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>
                            <a href="{{ route('book.show', ['id' => $book->id]) }}" style="color:#2a5298; text-decoration:none; font-weight:bold;">
                                {{ $book->title }}
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>
                            <a href="{{ route('book.edit', ['id' => $book->id]) }}" style="background:#2a5298;color:#fff;padding:6px 14px;border-radius:5px;text-decoration:none;font-weight:500;">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('book.delete', ['id' => $book->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:#c0392b;color:#fff;padding:6px 14px;border:none;border-radius:5px;font-weight:500;cursor:pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>{{ $books->total() }} book(s) found.</p>
        {{ $books->links() }}
    </div>
@endsection
