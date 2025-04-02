@extends('main')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">📚 Books </h1>
    
    <ul class="divide-y divide-gray-300">
        @foreach ($books as $book)
            <li class="p-4 bg-gray-50 rounded-lg shadow mb-3">
                <p class="text-lg font-semibold">{{ $book['title'] }}</p>
                <p class="text-gray-700"> Copyright: {{ $book['copyright'] }}</p>
                <p class="text-gray-600"> Edition: {{ $book['edition'] }}</p>
                <p class="text-gray-600"> Pages: {{ $book['pages'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
