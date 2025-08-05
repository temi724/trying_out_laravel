<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
     @vite('resources/css/app.css')
         {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    <title>@yield('title')</title>
    @yield('styles')
</head>
<body>
    <nav class="bg-[#2a5298]" style="padding: 16px 0; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
        <div style="max-width: 900px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">
            <a href="{{ route('books.index') }}" style="color: #fff; font-size: 1.3rem; font-weight: bold; text-decoration: none;">Book Review</a>
            <div>
                <a href="{{ route('books.index') }}" style="color: #fff; margin-right: 24px; text-decoration: none; font-weight: 500;">Book List</a>
                <a href="/" style="color: #fff; text-decoration: none; font-weight: 500;">Home</a>
                 <a href="{{ route('book.create') }}" style="color: #fff; text-decoration: none; font-weight: 500;">New</a>
            </div>
        </div>
    </nav>
    <div class="">
        @if(session()->has('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
                class="bg-green-100 text-green-800 px-4 py-3 rounded shadow-md mx-auto my-5 max-w-xl text-center font-semibold"
                style="margin: 20px auto;">
                {{ session('success') }}
            </div>

        @endif
    </div>
    <div>@yield('content')</div>

</body>
</html>
