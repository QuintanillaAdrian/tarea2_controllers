@extends('main')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">🏢 Publishers</h1>
    
    <ul class="divide-y divide-gray-300">
        @foreach ($publishers as $publisher)
            <li class="p-4 bg-gray-50 rounded-lg shadow mb-3">
                <p class="text-lg font-semibold">{{ $publisher['name'] }}</p>
                <p class="text-gray-700"> Country: {{ $publisher['country'] }}</p>
                <p class="text-gray-600"> Founded: {{ $publisher['founded'] }}</p>
                <p class="text-gray-600"> Genere: {{ $publisher['genre'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection