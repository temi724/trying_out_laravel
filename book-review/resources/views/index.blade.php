@extends('layout.app')
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
