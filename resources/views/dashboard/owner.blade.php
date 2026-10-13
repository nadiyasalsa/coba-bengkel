<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Owner</title>

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
                        Owner
                    </p>
                </div>

            </div>


            <!-- Navigation -->
            <nav class="p-4">

                <!-- Dashboard -->
                <a href="/dashboard/owner"
                    class="flex items-center px-4 py-3 rounded-lg bg-blue-50 text-blue-600 font-medium mb-2">

                    <span class="mr-3">📊</span>
                    Dashboard

                </a>


                <!-- Monitoring Stok -->
                <a href="/monitoring-stok"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📦</span>
                    Monitoring Stok

                </a>


                <!-- Penggunaan Barang -->
                <a href="/penggunaan-barang"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 mb-2">

                    <span class="mr-3">📈</span>
                    Penggunaan Barang

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
                        Dashboard Owner
                    </h2>

                    <p class="text-sm text-gray-500">
                        Ringkasan informasi operasional bengkel
                    </p>

                </div>


                <!-- Profile -->
                <div class="flex items-center">

                    <div class="text-right mr-3">

                        <p class="text-sm font-semibold text-gray-800">
                            Owner
                        </p>

                        <p class="text-xs text-gray-500">
                            Pemilik Bengkel
                        </p>

                    </div>

                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">

                        <span class="text-white font-semibold">
                            OW
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

                                <p class="text-xs text-gray-500 mt-2">
                                    Periode bulan ini
                                </p>

                            </div>

                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    🔧
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Penggunaan Barang -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Penggunaan Barang
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    342
                                </h3>

                                <p class="text-xs text-gray-500 mt-2">
                                    Unit digunakan
                                </p>

                            </div>

                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    📦
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Jenis Barang -->
                    <div class="bg-white rounded-xl shadow-sm p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Jenis Barang
                                </p>

                                <h3 class="text-3xl font-bold text-gray-800 mt-2">
                                    45
                                </h3>

                                <p class="text-xs text-gray-500 mt-2">
                                    Terdaftar
                                </p>

                            </div>

                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    🗃️
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

                                <p class="text-xs text-gray-500 mt-2">
                                    Perlu diperhatikan
                                </p>

                            </div>

                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">

                                <span class="text-2xl">
                                    ⚠️
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- STOCK SUMMARY -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">


                    <!-- STOK GUDANG VS BENGKEL -->
                    <div class="bg-white rounded-xl shadow-sm">

                        <div class="p-6 border-b">

                            <h3 class="text-lg font-semibold text-gray-800">
                                Ringkasan Stok
                            </h3>

                            <p class="text-sm text-gray-500">
                                Perbandingan stok berdasarkan lokasi
                            </p>

                        </div>


                        <div class="p-6 space-y-6">


                            <!-- Gudang -->
                            <div>

                                <div class="flex justify-between mb-2">

                                    <span class="text-sm font-medium text-gray-700">
                                        Stok Gudang
                                    </span>

                                    <span class="text-sm font-semibold text-gray-800">
                                        1.250 unit
                                    </span>

                                </div>

                                <div class="w-full bg-gray-200 rounded-full h-3">

                                    <div class="bg-blue-600 h-3 rounded-full"
                                        style="width: 80%">
                                    </div>

                                </div>

                            </div>


                            <!-- Bengkel -->
                            <div>

                                <div class="flex justify-between mb-2">

                                    <span class="text-sm font-medium text-gray-700">
                                        Stok Bengkel
                                    </span>

                                    <span class="text-sm font-semibold text-gray-800">
                                        320 unit
                                    </span>

                                </div>

                                <div class="w-full bg-gray-200 rounded-full h-3">

                                    <div class="bg-green-500 h-3 rounded-full"
                                        style="width: 35%">
                                    </div>

                                </div>

                            </div>


                            <!-- Total -->
                            <div class="pt-4 border-t">

                                <div class="flex justify-between">

                                    <span class="font-semibold text-gray-700">
                                        Total Stok
                                    </span>

                                    <span class="font-bold text-gray-800">
                                        1.570 unit
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- BARANG PALING BANYAK DIGUNAKAN -->
                    <div class="bg-white rounded-xl shadow-sm">

                        <div class="p-6 border-b">

                            <h3 class="text-lg font-semibold text-gray-800">
                                Barang Paling Banyak Digunakan
                            </h3>

                            <p class="text-sm text-gray-500">
                                Berdasarkan penggunaan barang
                            </p>

                        </div>


                        <div class="p-6 space-y-5">


                            <!-- Item 1 -->
                            <div class="flex items-center">

                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    📦
                                </div>

                                <div class="ml-4 flex-1">

                                    <p class="text-sm font-medium text-gray-800">
                                        Oli Mesin
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Digunakan 85 unit
                                    </p>

                                </div>

                                <span class="text-sm font-semibold text-gray-700">
                                    85
                                </span>

                            </div>


                            <!-- Item 2 -->
                            <div class="flex items-center">

                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    📦
                                </div>

                                <div class="ml-4 flex-1">

                                    <p class="text-sm font-medium text-gray-800">
                                        Filter Oli
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Digunakan 62 unit
                                    </p>

                                </div>

                                <span class="text-sm font-semibold text-gray-700">
                                    62
                                </span>

                            </div>


                            <!-- Item 3 -->
                            <div class="flex items-center">

                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    📦
                                </div>

                                <div class="ml-4 flex-1">

                                    <p class="text-sm font-medium text-gray-800">
                                        Busi
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Digunakan 48 unit
                                    </p>

                                </div>

                                <span class="text-sm font-semibold text-gray-700">
                                    48
                                </span>

                            </div>


                            <!-- Item 4 -->
                            <div class="flex items-center">

                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    📦
                                </div>

                                <div class="ml-4 flex-1">

                                    <p class="text-sm font-medium text-gray-800">
                                        Kampas Rem
                                    </p>

                                    <p class="text-xs text-gray-500">
                                        Digunakan 35 unit
                                    </p>

                                </div>

                                <span class="text-sm font-semibold text-gray-700">
                                    35
                                </span>

                            </div>


                        </div>

                    </div>

                </div>


                <!-- MONITORING PENGGUNAAN -->
                <div class="bg-white rounded-xl shadow-sm mt-6">

                    <div class="p-6 border-b flex justify-between items-center">

                        <div>

                            <h3 class="text-lg font-semibold text-gray-800">
                                Monitoring Penggunaan Barang
                            </h3>

                            <p class="text-sm text-gray-500">
                                Ringkasan penggunaan barang berdasarkan periode
                            </p>

                        </div>

                        <select
                            class="border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">

                            <option>Bulan Ini</option>
                            <option>Bulan Lalu</option>
                            <option>3 Bulan Terakhir</option>

                        </select>

                    </div>


                    <div class="p-6">

                        <!-- Simple Chart -->
                        <div class="flex items-end justify-between h-56 gap-4">


                            <!-- Minggu 1 -->
                            <div class="flex-1 flex flex-col items-center">

                                <div class="w-full bg-blue-500 rounded-t-lg"
                                    style="height: 45%">
                                </div>

                                <span class="text-xs text-gray-500 mt-2">
                                    Minggu 1
                                </span>

                            </div>


                            <!-- Minggu 2 -->
                            <div class="flex-1 flex flex-col items-center">

                                <div class="w-full bg-blue-500 rounded-t-lg"
                                    style="height: 65%">
                                </div>

                                <span class="text-xs text-gray-500 mt-2">
                                    Minggu 2
                                </span>

                            </div>


                            <!-- Minggu 3 -->
                            <div class="flex-1 flex flex-col items-center">

                                <div class="w-full bg-blue-500 rounded-t-lg"
                                    style="height: 50%">
                                </div>

                                <span class="text-xs text-gray-500 mt-2">
                                    Minggu 3
                                </span>

                            </div>


                            <!-- Minggu 4 -->
                            <div class="flex-1 flex flex-col items-center">

                                <div class="w-full bg-blue-500 rounded-t-lg"
                                    style="height: 80%">
                                </div>

                                <span class="text-xs text-gray-500 mt-2">
                                    Minggu 4
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