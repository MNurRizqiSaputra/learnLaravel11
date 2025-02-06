<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    {{-- Search Form --}}
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <form>
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"> {{-- Menyimpan nilai kategori ke dalam input hidden --}}
                @endif

                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}"> {{-- Menyimpan nilai penulis ke dalam input hidden --}}
                @endif
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for posts" type="search" id="search" name="search" autocomplete="off">
                    </div>
                    <div>
                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{ $posts->links() }} <!-- Menampilkan pagination atas-->

    {{-- Post content --}}
    <div class="space-y-8">
        <div class="max-w-screen-xl px-4 py-4 mx-auto lg:py-4 lg:px-0">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @forelse ($posts as $post)
                    <article
                        class="p-6 transition-all duration-300 ease-in-out transform bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-2xl hover:scale-105">
                        <div class="flex items-center justify-between mb-5 text-gray-500">
                            <a href="/posts?category={{ $post->category->slug }}">
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
                            <a href="/posts?author={{ $post->author->username }}">
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
                @empty
                {{-- Jika search tidak ditemukan --}}
                <div class="flex flex-col items-center justify-center p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-3xl font-semibold text-gray-800 dark:text-white mb-4">
                        No posts found
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Looks like there are no posts available at the moment. Check back later or explore other sections.
                    </p>
                    <a href="/posts" class="text-base font-medium text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600 transition-colors duration-300">
                        &laquo; Back to Blog
                    </a>
                </div>                
                @endforelse

            </div>
        </div>
    </div>

    {{ $posts->links() }} <!-- Menampilkan pagination bawah-->

</x-layout>
