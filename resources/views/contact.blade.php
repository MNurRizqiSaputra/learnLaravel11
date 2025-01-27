<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->
    <!-- Informasi Sosial Media -->
    <div class="flex space-x-4">
        <a href="https://www.instagram.com/yourusername" target="_blank"
            class="bg-pink-500 text-white rounded-lg px-6 py-3 shadow-md hover:bg-pink-600 transform hover:scale-105 transition duration-200">
            Instagram
        </a>
        <a href="https://www.facebook.com/yourusername" target="_blank"
            class="bg-blue-600 text-white rounded-lg px-6 py-3 shadow-md hover:bg-blue-700 transform hover:scale-105 transition duration-200">
            Facebook
        </a>
        <a href="https://twitter.com/yourusername" target="_blank"
            class="bg-blue-400 text-white rounded-lg px-6 py-3 shadow-md hover:bg-blue-500 transform hover:scale-105 transition duration-200">
            Twitter
        </a>
        <a href="https://www.linkedin.com/in/yourusername" target="_blank"
            class="bg-blue-700 text-white rounded-lg px-6 py-3 shadow-md hover:bg-blue-800 transform hover:scale-105 transition duration-200">
            LinkedIn
        </a>
    </div>
</x-layout>