<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Slot title from the router -->

    <!-- Content Section -->
    {{-- <div class="container p-6 mx-auto space-y-8">

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
    </div> --}}

    <main class="pt-8 pb-16 antialiased bg-white lg:pt-16 lg:pb-24 dark:bg-gray-900">
        <div class="flex justify-between max-w-screen-xl px-4 mx-auto ">
            <article
                class="w-full max-w-4xl mx-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="text-xs font-medium text-blue-500 hover:underline">&laquo; Back to Blog </a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="w-16 h-16 mr-4 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{  $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post['created_at']->diffForHumans() }}</p>
                                <a href="categories/{{ $post->category->slug }}">
                                    <span
                                        class="bg-{{ $post->category->color }}-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 my-1">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                </header>

                <p>{{ $post['body'] }}</p>
                    
            </article>
        </div>
    </main>



</x-layout>
