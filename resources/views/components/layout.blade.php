<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Blog Web Sederhana</title>
</head>

<body class="h-full">

    <div class="min-h-full">
        <!-- Navigation -->
        <x-navbar></x-navbar>

        <!--Header-->
        <x-header>{{ $title }}</x-header> <!-- Menggunakan slot title dari view-->

        <!--Content-->
        <main>
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>