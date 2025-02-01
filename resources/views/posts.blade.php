<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->
    
    <div class="space-y-8">
        @foreach ($posts as $post)
        <div class="p-6 transition-all duration-300 ease-in-out transform bg-white shadow-lg rounded-2xl hover:shadow-2xl hover:scale-105">
            <a href="/posts/{{ $post['slug'] }}" class="group">
                <h2 class="text-3xl font-semibold text-gray-900 transition duration-200 group-hover:text-indigo-600">{{ $post['title'] }}</h2>
            </a>
            <div class="flex items-center mt-3 space-x-4 text-gray-600">
                <span class="text-sm font-bold">By</span>
                <a class="text-lg hover:text-indigo-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                <span class="text-sm font-bold"># </span>
                <a class="text-lg hover:text-indigo-600" href="categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
                <span>&#8226;</span>
                <span class="text-sm">{{ $post['created_at']->diffForHumans() }}</span>
            </div>
            <p class="mt-4 text-base leading-relaxed text-gray-700">{{ Str::limit($post['body'], 120) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="inline-block mt-6 font-semibold text-indigo-600 transition duration-200 hover:text-indigo-800 group-hover:underline">Read More &raquo;</a>
        </div>
        @endforeach
    </div>
    

</x-layout>