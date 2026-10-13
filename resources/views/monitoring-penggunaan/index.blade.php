<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penggunaan Barang - Owner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r">

        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-gray-900">
                Bengkel Mobil MM JOKO MOTOR
            </h1>

            <p class="text-sm text-gray-500">
                Owner
            </p>
        </div>


        <nav class="p-4 space-y-2">

            <a href="/dashboard/owner"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/monitoring-stok"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Monitoring Stok
            </a>

            <a href="/monitoring-penggunaan"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Penggunaan Barang
            </a>

            <a href="/logout"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100 text-red-600">
                Logout
            </a>

        </nav>

    </aside>


    <!-- MAIN -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Penggunaan Barang
                </h2>

                <p class="text-sm text-gray-500">
                    Memantau penggunaan barang dalam kegiatan servis
                </p>
            </div>

            <div class="text-right">

                <p class="font-semibold text-gray-900">
                    Owner
                </p>

                <p class="text-sm text-gray-500">
                    owner
                </p>

            </div>

        </header>


        <!-- CONTENT -->
        <div class="p-8">


            <!-- SUMMARY -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Total Penggunaan
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        342
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        penggunaan barang
                    </p>

                </div>


                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Jenis Barang Digunakan
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        28
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        jenis barang
                    </p>

                </div>


                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Penggunaan Hari Ini
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        12
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        penggunaan
                    </p>

                </div>

            </div>


            <!-- GRAFIK SEDERHANA -->
            <div class="bg-white border rounded-xl mb-8">

                <div class="p-6 border-b">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Tren Penggunaan Barang
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Jumlah penggunaan barang dalam beberapa hari terakhir
                    </p>

                </div>


                <div class="p-6">

                    <div class="flex items-end gap-8 h-64 border-b">

                        <!-- SENIN -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 55%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                24 Sep
                            </p>

                        </div>


                        <!-- SELASA -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 70%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                25 Sep
                            </p>

                        </div>


                        <!-- RABU -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 45%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                26 Sep
                            </p>

                        </div>


                        <!-- KAMIS -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 80%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                27 Sep
                            </p>

                        </div>


                        <!-- JUMAT -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 65%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                28 Sep
                            </p>

                        </div>


                        <!-- SABTU -->
                        <div class="flex-1 flex flex-col items-center justify-end h-full">

                            <div
                                class="w-12 bg-gray-800 rounded-t-lg"
                                style="height: 90%">
                            </div>

                            <p class="text-xs text-gray-500 mt-3">
                                29 Sep
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- BARANG PALING BANYAK DIGUNAKAN -->
            <div class="bg-white border rounded-xl mb-8">

                <div class="p-6 border-b">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Barang Paling Banyak Digunakan
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Daftar barang berdasarkan jumlah penggunaan
                    </p>

                </div>


                <div class="p-6 space-y-6">


                    <!-- BARANG 1 -->
                    <div>

                        <div class="flex justify-between mb-2">

                            <span class="font-medium text-gray-900">
                                Oli Mesin
                            </span>

                            <span class="text-sm text-gray-500">
                                120 Liter
                            </span>

                        </div>


                        <div class="w-full bg-gray-200 rounded-full h-3">

                            <div
                                class="bg-gray-800 h-3 rounded-full"
                                style="width: 90%">
                            </div>

                        </div>

                    </div>


                    <!-- BARANG 2 -->
                    <div>

                        <div class="flex justify-between mb-2">

                            <span class="font-medium text-gray-900">
                                Filter Oli
                            </span>

                            <span class="text-sm text-gray-500">
                                75 Pcs
                            </span>

                        </div>


                        <div class="w-full bg-gray-200 rounded-full h-3">

                            <div
                                class="bg-gray-700 h-3 rounded-full"
                                style="width: 70%">
                            </div>

                        </div>

                    </div>


                    <!-- BARANG 3 -->
                    <div>

                        <div class="flex justify-between mb-2">

                            <span class="font-medium text-gray-900">
                                Busi
                            </span>

                            <span class="text-sm text-gray-500">
                                54 Pcs
                            </span>

                        </div>


                        <div class="w-full bg-gray-200 rounded-full h-3">

                            <div
                                class="bg-gray-600 h-3 rounded-full"
                                style="width: 55%">
                            </div>

                        </div>

                    </div>


                    <!-- BARANG 4 -->
                    <div>

                        <div class="flex justify-between mb-2">

                            <span class="font-medium text-gray-900">
                                Kampas Rem
                            </span>

                            <span class="text-sm text-gray-500">
                                42 Set
                            </span>

                        </div>


                        <div class="w-full bg-gray-200 rounded-full h-3">

                            <div
                                class="bg-gray-500 h-3 rounded-full"
                                style="width: 42%">
                            </div>

                        </div>

                    </div>


                </div>

            </div>


            <!-- RIWAYAT PENGGUNAAN -->
            <div class="bg-white border rounded-xl">

                <div class="p-6 border-b">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Riwayat Penggunaan Barang
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Data penggunaan barang pada kegiatan servis
                    </p>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b grid grid-cols-1 md:grid-cols-3 gap-4">

                    <input
                        type="text"
                        placeholder="Cari barang..."
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">


                    <input
                        type="date"
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">


                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">
                            Semua Barang
                        </option>

                        <option>
                            Oli Mesin
                        </option>

                        <option>
                            Filter Oli
                        </option>

                        <option>
                            Busi
                        </option>

                        <option>
                            Kampas Rem
                        </option>

                    </select>

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="bg-gray-50 border-b">

                            <tr>

                                <th class="text-left px-6 py-4">
                                    No
                                </th>

                                <th class="text-left px-6 py-4">
                                    Tanggal
                                </th>

                                <th class="text-left px-6 py-4">
                                    Barang
                                </th>

                                <th class="text-left px-6 py-4">
                                    Jumlah
                                </th>

                                <th class="text-left px-6 py-4">
                                    Kendaraan
                                </th>

                                <th class="text-left px-6 py-4">
                                    Layanan
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">


                            <tr>

                                <td class="px-6 py-4">
                                    1
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4">
                                    4 Liter
                                </td>

                                <td class="px-6 py-4">
                                    Toyota Avanza
                                </td>

                                <td class="px-6 py-4">
                                    Service Berkala
                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    2
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4">
                                    1 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    Honda Brio
                                </td>

                                <td class="px-6 py-4">
                                    Ganti Oli
                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4">
                                    28 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4">
                                    1 Set
                                </td>

                                <td class="px-6 py-4">
                                    Suzuki Ertiga
                                </td>

                                <td class="px-6 py-4">
                                    Tune Up
                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4">
                                    27 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>

                                <td class="px-6 py-4">
                                    4 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    Honda Brio
                                </td>

                                <td class="px-6 py-4">
                                    Tune Up
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–4 dari 342 penggunaan
                    </p>


                    <div class="flex gap-2">

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg">
                            Sebelumnya
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 bg-gray-900 text-white rounded-lg">
                            1
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg">
                            2
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg">
                            Selanjutnya
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>