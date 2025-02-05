<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    <div class="space-y-8">
        <div class="max-w-screen-xl px-4 py-4 mx-auto lg:py-4 lg:px-0">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($posts as $post)
                    <article
                        class="p-6 transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-2xl hover:scale-105">
                        <div class="flex items-center justify-between mb-5 text-gray-500">
                            <a href="categories/{{ $post->category->slug }}">
                                <span
                                    class="bg-{{ $post->category->color }}-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->name }}
                                </span>
                            </a>
                            <span class="text-sm">{{ $post['created_at']->diffForHumans() }}</span>
                        </div>
                        <a href="/posts/{{ $post['slug'] }}">
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white group-hover:text-indigo-600">
                                {{ $post['title'] }}</h2>
                        </a>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 120) }}
                        </p>
                        <div class="flex items-center justify-between">
                            <a href="/authors/{{ $post->author->username }}">
                                <div class="flex items-center space-x-3">
                                    <img class="rounded-full w-7 h-7"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="{{ $post->author->name }}" />
                                    <span class="text-xs font-medium dark:text-white">
                                        {{ $post->author->name }}
                                    </span>
                                </div>
                            </a>
                            <a href="/posts/{{ $post['slug'] }}"
                                class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:text-indigo-600 hover:underline">
                                Read more
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </div>

</x-layout>
