<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md">

        <div class="bg-white rounded-xl shadow-md p-8">

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">
                    Bengkel Mobil MM JOKO MOTOR
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    Sistem Informasi Manajemen Bengkel
                </p>
            </div>

            <!-- Error -->
            @if(session('error'))
                <div class="mb-5 p-3 rounded-lg bg-red-50 border border-red-200 text-red-600 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Login Form -->
            <form action="/login" method="POST">

                @csrf

                <!-- Username -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        value="{{ old('username') }}"
                        placeholder="Masukkan username"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3
                               focus:outline-none focus:ring-2 focus:ring-gray-400"
                    >
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3
                               focus:outline-none focus:ring-2 focus:ring-gray-400"
                    >
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full bg-gray-800 text-white py-3 rounded-lg
                           hover:bg-gray-700 transition">
                    Login
                </button>

            </form>

            <!-- Akun Demo -->
            <div class="mt-6 p-4 bg-gray-50 rounded-lg border border-gray-200">

                <p class="text-sm font-semibold text-gray-700 mb-3">
                    Akun Demo
                </p>

                <div class="text-xs text-gray-600 space-y-2">
                    <p>
                        <strong>Admin Bengkel:</strong>
                        admin.bengkel / bengkel123
                    </p>

                    <p>
                        <strong>Admin Gudang:</strong>
                        admin.gudang / gudang123
                    </p>

                    <p>
                        <strong>Owner:</strong>
                        owner / owner123
                    </p>
                </div>

            </div>

        </div>

    </div>

</body>
</html>