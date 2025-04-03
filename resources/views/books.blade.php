@extends('main')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">📚 Books</h1>

    <div x-data="{ showModal: false, showPublisherModal: false, author: {}, publisher: {} }">
        <ul class="divide-y divide-gray-300">
            @foreach ($books as $book)
                <li class="p-4 bg-gray-50 rounded-lg shadow mb-3">
                    <p class="text-lg font-semibold">{{ $book->title }}</p>
                    <p class="text-gray-700">Copyright: {{ $book->copyright }}</p>
                    <p class="text-gray-600">Edition: {{ $book->edition }}</p>
                    <p class="text-gray-600">Pages: {{ $book->pages }}</p>
                    
                    <p>Author:</p>
                    <!-- Botón para mostrar detalles del autor -->
                    <button @click="author = {{ json_encode($book->author) }}; showModal = true" 
                            class="text-blue-600 hover:underline">
                        Author: {{ $book->author->name }}
                    </button>
                    <p>Publisher:</p>
                    <!-- Botón para mostrar detalles del publisher -->
                    <button @click="publisher = {{ json_encode($book->publisher) }}; showPublisherModal = true" 
                            class="text-blue-600 hover:underline">
                        {{ $book->publisher->name }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Modal para mostrar detalles del autor -->
        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-2" x-text="author.name"></h2>
                <p class="text-gray-700">🌍 Nationality: <span x-text="author.nationality"></span></p>
                <p class="text-gray-600">📅 Birth year: <span x-text="author.birth"></span></p>
                <p class="text-gray-600">📚 Fields: <span x-text="author.fields"></span></p>
                <button @click="showModal = false" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">
                    × Close
                </button>
            </div>
        </div>

        <!-- Modal para mostrar detalles del publisher -->
        <div x-show="showPublisherModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-2" x-text="publisher.name"></h2>
                <p class="text-gray-700">🌍 Country: <span x-text="publisher.country"></span></p>
                <p class="text-gray-600">📅 Founded: <span x-text="publisher.founded"></span></p>
                <p class="text-gray-600">📖 Genre: <span x-text="publisher.genre"></span></p>
                <button @click="showPublisherModal = false" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">
                    × Close
                </button>
            </div>
        </div>
    </div>
@endsection
