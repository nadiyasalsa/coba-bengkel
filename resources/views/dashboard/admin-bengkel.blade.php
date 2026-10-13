<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin Bengkel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white shadow-md">

            <!-- Logo -->
            <div class="h-20 flex items-center px-6 border-b">

                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                    <span class="text-white text-xl">🔧</span>
                </div>

                <div class="ml-3">
                    <h1 class="font-bold text-gray-800">
                        Bengkel Mobil MM JOKO MOTOR
                    </h1>

                    <p class="text-xs text-gray-500">
                        Admin Bengkel
                    </p>
                </div>

            </div>


            <!-- Navigation -->
            <nav class="p-4">

                <!-- Dashboard -->
                <a href="/dashboard/admin-bengkel"
                    class="flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 font-medium mb-2">

                    <span class="mr-3">📊</span>

                    Dashboard

                </a>


                <!-- Data Servis -->
                <a href="/service"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🔧</span>

                    Data Servis

                </a>


                <!-- Data Kendaraan -->
                <a href="/data-kendaraan"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🚗</span>

                    Data Kendaraan

                </a>


                <!-- Penggunaan Barang -->
                <a href="/penggunaan-barang"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📦</span>

                    Penggunaan Barang

                </a>


                <!-- Stok Bengkel -->
                <a href="/stok-bengkel"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📋</span>

                    Stok Bengkel

                </a>


                <!-- Request Stok -->
                <a href="request-stok"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📤</span>

                    Request Stok

                </a>


                <!-- Riwayat Penggunaan -->
                <a href="/riwayat-penggunaan"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🕘</span>

                    Riwayat Penggunaan

                </a>

            </nav>


            <!-- Logout -->
            <div class="absolute bottom-0 w-64 p-4 border-t bg-white">

                <a href="/logout"
                    class="flex items-center px-4 py-3 rounded-lg text-red-600 hover:bg-red-50">

                    <span class="mr-3">🚪</span>

                    Logout

                </a>

            </div>

        </aside>


        <!-- MAIN CONTENT -->
        <main class="flex-1">

            <!-- TOPBAR -->
            <header class="h-20 bg-white shadow-sm flex items-center justify-between px-8">

                <div>

                    <h2 class="text-2xl font-bold text-gray-800">
                        Dashboard
                    </h2>

                    <p class="text-sm text-gray-500">
                        Selamat datang, Admin Bengkel
                    </p>

                </div>


                <!-- Profile -->
                <div class="flex items-center">

                    <div class="text-right mr-3">

                        <p class="text-sm font-semibold text-gray-800">
                            Admin Bengkel
                        </p>

                        <p class="text-xs text-gray-500">
                            Admin
                        </p>

                    </div>

                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">

                        <span class="text-white font-semibold">
                            AB
                        </span>

                    </div>

                </div>

            </header>


            <!-- CONTENT -->
            <div class="p-8">

                <!-- STATISTICS -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">


                    <!-- Total Servis -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Total Servis
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    128
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    🔧
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Servis Hari Ini -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Servis Hari Ini
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    12
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    📅
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Sedang Dikerjakan -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Sedang Dikerjakan
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    5
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    ⚙️
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Selesai -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Servis Selesai
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    7
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    ✅
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- CONTENT GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">


                    <!-- SERVIS TERBARU -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm">

                        <div class="p-6 border-b flex justify-between items-center">

                            <div>

                                <h3 class="text-lg font-semibold text-gray-800">
                                    Servis Terbaru
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Data servis terbaru di bengkel
                                </p>

                            </div>

                            <a href="#" class="text-sm text-blue-600 hover:underline">
                                Lihat Semua
                            </a>

                        </div>


                        <div class="overflow-x-auto">

                            <table class="w-full">

                                <thead class="bg-gray-50">

                                    <tr>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Pelanggan
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Kendaraan
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Layanan
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Status
                                        </th>

                                    </tr>

                                </thead>


                                <tbody class="divide-y">


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Budi
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Toyota Avanza
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Ganti Oli
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                                Diproses
                                            </span>

                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Andi
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Honda Brio
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Servis Mesin
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                                Selesai
                                            </span>

                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Sinta
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Suzuki Ertiga
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            Tune Up
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                                Diproses
                                            </span>

                                        </td>

                                    </tr>


                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!-- STOK MENIPIS -->
                    <div class="bg-white rounded-xl shadow-sm">

                        <div class="p-6 border-b">

                            <h3 class="text-lg font-semibold text-gray-800">
                                Stok Menipis
                            </h3>

                            <p class="text-sm text-gray-500">
                                Perlu diperhatikan
                            </p>

                        </div>


                        <div class="p-6 space-y-5">


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Oli Mesin
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 10
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    4 tersisa
                                </span>

                            </div>


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Filter Oli
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 5
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    2 tersisa
                                </span>

                            </div>


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Busi
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 8
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    5 tersisa
                                </span>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>