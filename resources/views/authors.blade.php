@extends('main')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">✍️ Authors</h1>
    <ul class="divide-y divide-gray-300">
        @foreach ($authors as $id => $author)
            <li class="p-4 bg-gray-50 rounded-lg shadow mb-3">
                <a class="text-lg font-semibold" href="{{ route('authors.show', $id) }}">{{ $author['author'] }}</a>
                <p class="text-gray-700"> Nationality: {{ $author['nationality'] }}</p>
                <p class="text-gray-600"> Birth year: {{ $author['birth'] }}</p>
                <p class="text-gray-600"> Fields: {{ $author['fields'] }}</p>
                
            </li>
        @endforeach
    </ul>
@endsection
