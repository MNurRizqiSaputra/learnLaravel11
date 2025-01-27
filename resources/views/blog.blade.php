<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->

    <!-- Your content -->
    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-900">Judul Artikel 1</h2>
            <p class="mt-4 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt eros eu erat cursus, sit amet dictum urna fermentum. Quisque quis volutpat erat.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-900">Judul Artikel 2</h2>
            <p class="mt-4 text-gray-700">Suspendisse potenti. Vivamus ut erat et felis vehicula ultricies. Ut ac ligula eget neque ultricies volutpat. Curabitur vitae magna ut leo blandit pretium.</p>
        </div>
    </div>

</x-layout>