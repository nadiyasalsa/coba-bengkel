<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Gudang - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r">

        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-gray-900">
                Bengkel Mobil MM JOKO MOTOR
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Admin Gudang
            </p>
        </div>

        <nav class="p-4 space-y-2">

            <a href="/dashboard/admin-gudang"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/master-barang"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Master Barang
            </a>

            <a href="/stok-gudang"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Stok Gudang
            </a>

            <a href="/barang-masuk"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Barang Masuk
            </a>

            <a href="/req-stok-gudang"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Request Stok
            </a>

            <a href="#"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Transfer Stok
            </a>

            <a href="/riwayat-stok"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Riwayat Stok
            </a>

            <a href="/logout"
               class="block px-4 py-3 rounded-lg text-red-600 hover:bg-red-50">
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
                    Stok Gudang
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Monitoring persediaan barang di gudang
                </p>
            </div>

            <div class="text-right">
                <p class="font-semibold text-gray-900">
                    Admin Gudang
                </p>

                <p class="text-sm text-gray-500">
                    admin.gudang
                </p>
            </div>

        </header>


        <!-- CONTENT -->
        <section class="p-8">

            <!-- SUMMARY -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-gray-500">
                        Jenis Barang
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        45
                    </h3>
                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-gray-500">
                        Total Stok Gudang
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        1.250
                    </h3>
                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-gray-500">
                        Stok Menipis
                    </p>

                    <h3 class="text-3xl font-bold text-red-600 mt-2">
                        6
                    </h3>
                </div>

            </div>


            <!-- TABLE -->
            <div class="bg-white rounded-xl shadow-sm border">

                <div class="p-6 border-b">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Daftar Stok Gudang
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Daftar jumlah barang yang tersedia di gudang.
                            </p>
                        </div>

                    </div>


                    <!-- FILTER -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

                        <input
                            type="text"
                            placeholder="Cari nama barang..."
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >

                        <select
                            class="border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

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
                            class="border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

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

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="bg-gray-50 border-b">

                            <tr class="text-left">

                                <th class="px-6 py-4 font-semibold">
                                    No
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Nama Barang
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Kategori
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Stok
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Satuan
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Minimum
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">

                            <!-- DATA 1 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    1
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4">
                                    Pelumas
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    120
                                </td>

                                <td class="px-6 py-4">
                                    Liter
                                </td>

                                <td class="px-6 py-4">
                                    10
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        Aman
                                    </span>
                                </td>

                            </tr>


                            <!-- DATA 2 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    2
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4">
                                    Filter
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    8
                                </td>

                                <td class="px-6 py-4">
                                    Pcs
                                </td>

                                <td class="px-6 py-4">
                                    10
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                        Menipis
                                    </span>
                                </td>

                            </tr>


                            <!-- DATA 3 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4">
                                    Rem
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    25
                                </td>

                                <td class="px-6 py-4">
                                    Set
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        Aman
                                    </span>
                                </td>

                            </tr>


                            <!-- DATA 4 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>

                                <td class="px-6 py-4">
                                    Mesin
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    3
                                </td>

                                <td class="px-6 py-4">
                                    Pcs
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                        Menipis
                                    </span>
                                </td>

                            </tr>


                            <!-- DATA 5 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Air Radiator
                                </td>

                                <td class="px-6 py-4">
                                    Cairan
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    0
                                </td>

                                <td class="px-6 py-4">
                                    Liter
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                        Habis
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="px-6 py-4 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1-5 dari 45 barang
                    </p>

                    <div class="flex gap-2">

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg text-sm hover:bg-gray-100">
                            Sebelumnya
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 bg-gray-900 text-white rounded-lg text-sm">
                            1
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg text-sm hover:bg-gray-100">
                            2
                        </button>

                        <button
                            type="button"
                            class="px-4 py-2 border rounded-lg text-sm hover:bg-gray-100">
                            Selanjutnya
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>