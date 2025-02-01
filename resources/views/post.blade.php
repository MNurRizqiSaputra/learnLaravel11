<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Slot title from the router -->

    <!-- Content Section -->
    <div class="container p-6 mx-auto space-y-8">

        <!-- Post Content -->
        <div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-lg">
            
            <!-- Post Title -->
            <h1 class="mb-4 text-3xl font-bold text-gray-900">{{ $post['title'] }}</h1>

            <!-- Post Metadata (Author, Category, Date) -->
            <div class="flex items-center mt-3 space-x-4 text-gray-600">
                <span class="text-sm font-bold">By</span>
                <a class="text-lg hover:text-indigo-600" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                <span class="text-sm font-bold"># </span>
                <a class="text-lg hover:text-indigo-600" href="categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                <span>&#8226;</span>
                <span class="text-sm">{{ $post['created_at']->diffForHumans() }}</span>
            </div>

            <!-- Post Body Content -->
            <div class="mt-6 text-lg leading-relaxed text-gray-700">
                <p>{{ $post['body'] }}</p>
            </div>

            <!-- Back to Blog Button -->
            <div class="mt-8 text-center">
                <a href="/posts">
                    <button class="px-6 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                        &laquo; Back to Blog
                    </button>
                </a>
            </div>
        </div>
    </div>

</x-layout>
