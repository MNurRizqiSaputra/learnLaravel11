<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    <!-- Your content -->
    <div class="space-y-6">
        
        <div class="p-6 bg-white rounded-lg shadow-lg">
            
                <h2 class="text-2xl font-semibold text-gray-900">{{ $post['title'] }}</h2> <!-- Menggunakan $post['title'] dari router -->
            
            <h3>By {{ $post ['author'] }} | {{ $post['created_at']->diffForHumans() }}</h3> <!-- Menggunakan $post['author'] & $post['created_at'] dari database -->
            <p class="mt-4 text-gray-700">{{ $post ['body'] }}</p> <!-- Menggunakan $post['body'] dari router -->
            <a href="/posts" class="mt-4 text-indigo-600 hover:text-indigo-800">  &laquo; Back to Blog</a>
        </div>
        
    </div>

</x-layout>