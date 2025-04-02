<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My library</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-2xl font-bold text-center">Virtual Library</h1>
        <nav class="mt-2 flex justify-center space-x-4">
            <a href="{{ route('books.index') }}" class="hover:underline">📚 Books</a>
            <a href="{{ route('authors.index') }}" class="hover:underline">✍️ Authors</a>
            <a href="{{ route('publishers.index') }}" class="hover:underline">🏢 Publishers</a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        @yield('content')
    </main>

    <footer class="text-center p-4 mt-6 bg-gray-200">
        <p>&copy; 2025 Biblioteca Virtual</p>
    </footer>
</body>
</html>