@extends('layout.app')

@section('styles')
    <style>
        /* Hide SVG arrows in pagination */
        .pagination .page-link svg { display: none; }
        svg { display: none; }
    </style>


@endsection
@section('content')


    <div class="flex justify-center items-center min-h-screen bg-gray-50">
        <div class="w-full max-w-5xl p-8 bg-white rounded-lg shadow-xl">
            <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Book List</h1>
            <table class="min-w-full border border-gray-300  rounded-lg overflow-hidden">
                <thead class="bg-blue-800">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase border-b border-gray-300">ID</th>
                        <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase border-b border-gray-300">Title</th>
                        <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase border-b border-gray-300">Author</th>
                        <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase border-b border-gray-300">Year</th>
                        <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase border-b border-gray-300">Genre</th>
                        <th class="px-4 py-2 border-b border-gray-300"></th>
                        <th class="px-4 py-2 border-b border-gray-300"></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($books as $book)
                        <tr class="hover:bg-blue-50 border-b border-gray-200">
                            <td class="px-4 py-2">{{ $book->id }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('book.show', ['id' => $book->id]) }}" class="text-blue-800 font-bold hover:underline">
                                    {{ $book->title }}
                                </a>
                            </td>
                            <td class="px-4 py-2">{{ $book->author }}</td>
                            <td class="px-4 py-2">{{ $book->year }}</td>
                            <td class="px-4 py-2">{{ $book->genre }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('book.edit', ['id' => $book->id]) }}" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-900 font-semibold">Edit</a>
                            </td>
                            <td class="px-4 py-2">
                                <form action="{{ route('book.delete', ['id' => $book->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded font-semibold hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if($books->count() === 0)
                <p class="text-center text-gray-500 mt-6">No books found.</p>
            @else
                <p class="text-center text-blue-800 font-bold mb-4 mt-6">{{ $books->total() }} book(s) found.</p>
                <div class="flex justify-center">
                    <div>{{ $books->links() }}</div>
                </div>
            @endif
        </div>
    </div>
@endsection
