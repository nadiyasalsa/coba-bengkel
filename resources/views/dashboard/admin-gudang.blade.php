<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin Gudang</title>

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
                        Admin Gudang
                    </p>
                </div>

            </div>


            <!-- Navigation -->
            <nav class="p-4">

                <!-- Dashboard -->
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 font-medium mb-2">

                    <span class="mr-3">📊</span>
                    Dashboard

                </a>


                <!-- Master Barang -->
                <a href="/master-barang"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📦</span>
                    Master Barang

                </a>


                <!-- Stok Gudang -->
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🏭</span>
                    Stok Gudang

                </a>


                <!-- Barang Masuk -->
                <a href="/barang-masuk"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📥</span>
                    Barang Masuk

                </a>


                <!-- Request Stok -->
                <a href="/req-stok-gudang"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📋</span>
                    Request Stok

                </a>


                <!-- Transfer Stok -->
                <a href="/transfer-stok"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🔄</span>
                    Transfer Stok

                </a>


                <!-- Riwayat Stok -->
                <a href="/riwayat-stok"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">🕘</span>
                    Riwayat Stok

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
                        Selamat datang, Admin Gudang
                    </p>

                </div>


                <!-- Profile -->
                <div class="flex items-center">

                    <div class="text-right mr-3">

                        <p class="text-sm font-semibold text-gray-800">
                            Admin Gudang
                        </p>

                        <p class="text-xs text-gray-500">
                            Admin
                        </p>

                    </div>

                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">

                        <span class="text-white font-semibold">
                            AG
                        </span>

                    </div>

                </div>

            </header>


            <!-- CONTENT -->
            <div class="p-8">


                <!-- STATISTICS -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">


                    <!-- Total Jenis Barang -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Jenis Barang
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    45
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    📦
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Total Stok -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Total Stok Gudang
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    1.250
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    🏭
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Stok Menipis -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Stok Menipis
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    6
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    ⚠️
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Request Masuk -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Request Stok
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    4
                                </h3>

                            </div>

                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    📋
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- CONTENT GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">


                    <!-- REQUEST STOK -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm">

                        <div class="p-6 border-b flex justify-between items-center">

                            <div>

                                <h3 class="text-lg font-semibold text-gray-800">
                                    Request Stok Terbaru
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Permintaan stok dari Admin Bengkel
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
                                            Barang
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Jumlah
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Tanggal
                                        </th>

                                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">
                                            Status
                                        </th>

                                    </tr>

                                </thead>


                                <tbody class="divide-y">


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Oli Mesin
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            10
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            28 Sep 2026
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                                Menunggu
                                            </span>

                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Filter Oli
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            5
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            28 Sep 2026
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                                Disetujui
                                            </span>

                                        </td>

                                    </tr>


                                    <tr>

                                        <td class="px-6 py-4 text-sm">
                                            Busi
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            8
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            27 Sep 2026
                                        </td>

                                        <td class="px-6 py-4">

                                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                                Menunggu
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
                                Barang yang perlu diperhatikan
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
                                        Minimum: 20
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    8 tersisa
                                </span>

                            </div>


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Filter Oli
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 15
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    7 tersisa
                                </span>

                            </div>


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Busi
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 10
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    5 tersisa
                                </span>

                            </div>


                            <!-- Item -->
                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="font-medium text-gray-800">
                                        Kampas Rem
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Minimum: 10
                                    </p>

                                </div>

                                <span class="px-3 py-1 bg-red-100 text-red-600 text-xs rounded-full">
                                    6 tersisa
                                </span>

                            </div>


                        </div>

                    </div>

                </div>


                <!-- AKTIVITAS STOK -->
                <div class="bg-white rounded-xl shadow-sm mt-6">

                    <div class="p-6 border-b">

                        <h3 class="text-lg font-semibold text-gray-800">
                            Aktivitas Stok Terbaru
                        </h3>

                        <p class="text-sm text-gray-500">
                            Aktivitas barang yang dilakukan di gudang
                        </p>

                    </div>


                    <div class="p-6">

                        <div class="space-y-5">


                            <!-- Aktivitas -->
                            <div class="flex items-start">

                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                    📥
                                </div>

                                <div class="ml-4">

                                    <p class="text-sm text-gray-800">
                                        Barang masuk: <strong>Oli Mesin</strong>
                                    </p>

                                    <p class="text-xs text-gray-500 mt-1">
                                        Penambahan 20 unit
                                    </p>

                                </div>

                                <span class="ml-auto text-xs text-gray-400">
                                    Hari ini
                                </span>

                            </div>


                            <!-- Aktivitas -->
                            <div class="flex items-start">

                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                    🔄
                                </div>

                                <div class="ml-4">

                                    <p class="text-sm text-gray-800">
                                        Transfer stok: <strong>Filter Oli</strong>
                                    </p>

                                    <p class="text-xs text-gray-500 mt-1">
                                        5 unit ke Bengkel
                                    </p>

                                </div>

                                <span class="ml-auto text-xs text-gray-400">
                                    Hari ini
                                </span>

                            </div>


                            <!-- Aktivitas -->
                            <div class="flex items-start">

                                <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                    📋
                                </div>

                                <div class="ml-4">

                                    <p class="text-sm text-gray-800">
                                        Request stok: <strong>Busi</strong>
                                    </p>

                                    <p class="text-xs text-gray-500 mt-1">
                                        Permintaan 8 unit dari Admin Bengkel
                                    </p>

                                </div>

                                <span class="ml-auto text-xs text-gray-400">
                                    Kemarin
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