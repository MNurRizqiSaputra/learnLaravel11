<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan slot title dari router -->
    <h3 class="text-3xl font-semibold text-center my-6">User Page</h3>

    <!-- User Cards Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 py-8">
        @foreach ($users as $user)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-xl font-semibold text-gray-800">{{ $user->name }}</h4>
                        <span class="text-sm text-gray-500">{{ $user->created_at->format('d M Y') }}</span>
                    </div>

                    <p class="text-gray-600 mb-2"><strong>Email:</strong> {{ $user->email }}</p>
                    <p class="text-gray-600 mb-4">
                        <strong>Email Verified:</strong> 
                        @if ($user->email_verified_at)
                            <span class="text-green-500">{{ $user->email_verified_at->diffForHumans() }}</span>
                        @else
                            <span class="text-red-500">Not Verified</span>
                        @endif
                    </p>

                    <p class="text-gray-600 mb-4">
                        <strong>Role:</strong> 
                        @if ($user->is_admin)
                            <span class="text-red-500 font-semibold">Admin</span>
                        @else
                            <span class="text-blue-500 font-semibold">User</span>
                        @endif
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
