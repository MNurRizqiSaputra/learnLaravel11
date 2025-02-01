<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    <div class="space-y-8">
        @foreach ($posts as $post)
        <div class="p-6 bg-white rounded-2xl shadow-lg transition-all hover:shadow-2xl hover:scale-105 transform duration-300 ease-in-out">
            <a href="/posts/{{ $post['slug'] }}" class="group">
                <h2 class="text-3xl font-semibold text-gray-900 group-hover:text-indigo-600 transition duration-200">{{ $post['title'] }}</h2>
            </a>
            <div class="flex items-center space-x-4 mt-3 text-gray-600">
                <a class="text-lg hover:text-indigo-600" href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a>
                <span>&#8226;</span>
                <span class="text-sm">{{ $post['created_at']->diffForHumans() }}</span>
            </div>
            <p class="mt-4 text-gray-700 text-base leading-relaxed">{{ Str::limit($post['body'], 120) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800 font-semibold group-hover:underline transition duration-200">Read More &raquo;</a>
        </div>
        @endforeach
    </div>
    

</x-layout>