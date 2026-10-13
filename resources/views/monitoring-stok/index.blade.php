<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring Stok - Owner</title>

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
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Monitoring Stok
            </a>

            <a href="/monitoring-penggunaan"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
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
                    Monitoring Stok
                </h2>

                <p class="text-sm text-gray-500">
                    Memantau kondisi stok gudang dan bengkel
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
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Jenis Barang
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        45
                    </p>

                </div>


                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Stok Gudang
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        1.250
                    </p>

                </div>


                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Stok Bengkel
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        342
                    </p>

                </div>


                <div class="bg-white p-6 rounded-xl border">

                    <p class="text-sm text-gray-500">
                        Stok Menipis
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        6
                    </p>

                </div>

            </div>


            <!-- PERBANDINGAN STOK -->
            <div class="bg-white border rounded-xl mb-8">

                <div class="p-6 border-b">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Perbandingan Stok
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Perbandingan jumlah stok berdasarkan lokasi
                    </p>

                </div>


                <div class="p-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- GUDANG -->
                        <div class="border rounded-xl p-6">

                            <div class="flex justify-between items-center mb-4">

                                <div>
                                    <p class="text-sm text-gray-500">
                                        Stok Gudang
                                    </p>

                                    <p class="text-2xl font-bold">
                                        1.250
                                    </p>
                                </div>

                                <span class="text-sm text-gray-500">
                                    Unit
                                </span>

                            </div>


                            <div class="w-full bg-gray-200 rounded-full h-3">

                                <div
                                    class="bg-gray-800 h-3 rounded-full"
                                    style="width: 78%">
                                </div>

                            </div>

                            <p class="text-sm text-gray-500 mt-3">
                                Persediaan utama gudang
                            </p>

                        </div>


                        <!-- BENGKEL -->
                        <div class="border rounded-xl p-6">

                            <div class="flex justify-between items-center mb-4">

                                <div>
                                    <p class="text-sm text-gray-500">
                                        Stok Bengkel
                                    </p>

                                    <p class="text-2xl font-bold">
                                        342
                                    </p>
                                </div>

                                <span class="text-sm text-gray-500">
                                    Unit
                                </span>

                            </div>


                            <div class="w-full bg-gray-200 rounded-full h-3">

                                <div
                                    class="bg-gray-500 h-3 rounded-full"
                                    style="width: 35%">
                                </div>

                            </div>

                            <p class="text-sm text-gray-500 mt-3">
                                Persediaan yang tersedia di bengkel
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- TABEL STOK -->
            <div class="bg-white border rounded-xl">

                <div class="p-6 border-b flex justify-between items-center">

                    <div>

                        <h3 class="text-lg font-semibold text-gray-900">
                            Detail Stok Barang
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Kondisi stok berdasarkan lokasi
                        </p>

                    </div>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b grid grid-cols-1 md:grid-cols-3 gap-4">

                    <input
                        type="text"
                        placeholder="Cari nama barang..."
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">


                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">
                            Semua Kategori
                        </option>

                        <option>
                            Pelumas
                        </option>

                        <option>
                            Filter
                        </option>

                        <option>
                            Rem
                        </option>

                        <option>
                            Mesin
                        </option>

                        <option>
                            Cairan
                        </option>

                    </select>


                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">
                            Semua Status
                        </option>

                        <option>
                            Aman
                        </option>

                        <option>
                            Menipis
                        </option>

                        <option>
                            Habis
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
                                    Nama Barang
                                </th>

                                <th class="text-left px-6 py-4">
                                    Kategori
                                </th>

                                <th class="text-left px-6 py-4">
                                    Stok Gudang
                                </th>

                                <th class="text-left px-6 py-4">
                                    Stok Bengkel
                                </th>

                                <th class="text-left px-6 py-4">
                                    Total
                                </th>

                                <th class="text-left px-6 py-4">
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">


                            <tr>

                                <td class="px-6 py-4">
                                    1
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4">
                                    Pelumas
                                </td>

                                <td class="px-6 py-4">
                                    120 Liter
                                </td>

                                <td class="px-6 py-4">
                                    15 Liter
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    135 Liter
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Aman
                                    </span>

                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    2
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4">
                                    Filter
                                </td>

                                <td class="px-6 py-4">
                                    8 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    4 Pcs
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    12 Pcs
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs">
                                        Menipis
                                    </span>

                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4">
                                    Rem
                                </td>

                                <td class="px-6 py-4">
                                    25 Set
                                </td>

                                <td class="px-6 py-4">
                                    8 Set
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    33 Set
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Aman
                                    </span>

                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>

                                <td class="px-6 py-4">
                                    Mesin
                                </td>

                                <td class="px-6 py-4">
                                    3 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    2 Pcs
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    5 Pcs
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs">
                                        Habis
                                    </span>

                                </td>

                            </tr>


                            <tr>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Air Radiator
                                </td>

                                <td class="px-6 py-4">
                                    Cairan
                                </td>

                                <td class="px-6 py-4">
                                    0 Liter
                                </td>

                                <td class="px-6 py-4">
                                    0 Liter
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    0 Liter
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs">
                                        Habis
                                    </span>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–5 dari 45 barang
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