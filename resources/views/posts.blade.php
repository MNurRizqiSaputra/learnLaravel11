<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    <!-- Your content -->
    <div class="space-y-6">
        @foreach ($posts as $post)
        <div class="p-6 bg-white rounded-lg shadow-lg">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-2xl font-semibold text-gray-900">{{ $post['title'] }}</h2> <!-- Menggunakan $post['title'] dari router -->
            </a>
            <h3>By {{ $post ['author'] }} | {{ $post['created_at']->diffForHumans() }}</h3> <!-- Menggunakan $post['author'] & $post['created_at'] dari database -->
            <p class="mt-4 text-gray-700">{{ Str::limit($post ['body'], 100) }}</p> <!-- Menggunakan $post['body'] dari router -->
            <a href="/posts/{{ $post['slug'] }}" class="mt-4 text-indigo-600 hover:text-indigo-800"> Read More &raquo;</a>
        </div>
        @endforeach
    </div>

</x-layout>