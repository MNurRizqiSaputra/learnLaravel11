<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->
    <h1>Halaman About</h1>
    <p>Ini halaman about</p>
    <p>Hallo nama saya {{ $name }}</p>
</x-layout>