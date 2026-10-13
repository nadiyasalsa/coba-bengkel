<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barang Masuk - Bengkel Mobil MM JOKO MOTOR</title>

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
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Stok Gudang
            </a>

            <a href="/barang-masuk"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
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
                    Barang Masuk
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Kelola pencatatan barang yang masuk ke gudang
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
                        Total Transaksi
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        35
                    </h3>
                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-gray-500">
                        Barang Masuk Bulan Ini
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        128
                    </h3>
                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <p class="text-sm text-gray-500">
                        Transaksi Hari Ini
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        5
                    </h3>
                </div>

            </div>


            <!-- TABLE CARD -->
            <div class="bg-white rounded-xl shadow-sm border">

                <div class="p-6 border-b">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Riwayat Barang Masuk
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Daftar transaksi barang yang masuk ke gudang.
                            </p>
                        </div>

                        <a href="/barang-masuk/create"
                           class="bg-gray-900 text-white px-5 py-3 rounded-lg hover:bg-gray-800 text-center">
                            + Catat Barang Masuk
                        </a>

                    </div>


                    <!-- FILTER -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

                        <input
                            type="text"
                            placeholder="Cari nama barang..."
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >

                        <input
                            type="date"
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >

                        <input
                            type="text"
                            placeholder="Cari supplier..."
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >

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
                                    Tanggal
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Nama Barang
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Jumlah
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Supplier
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Keterangan
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">

                            <!-- DATA 1 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    1
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    50 Liter
                                </td>

                                <td class="px-6 py-4">
                                    PT Oli Jaya
                                </td>

                                <td class="px-6 py-4">
                                    Stok bulanan
                                </td>

                                <td class="px-6 py-4">

                                    <button
                                        type="button"
                                        class="text-gray-900 font-medium hover:underline">
                                        Detail
                                    </button>

                                </td>

                            </tr>


                            <!-- DATA 2 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    2
                                </td>

                                <td class="px-6 py-4">
                                    28 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    30 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    CV Sumber Motor
                                </td>

                                <td class="px-6 py-4">
                                    Pengadaan rutin
                                </td>

                                <td class="px-6 py-4">

                                    <button
                                        type="button"
                                        class="text-gray-900 font-medium hover:underline">
                                        Detail
                                    </button>

                                </td>

                            </tr>


                            <!-- DATA 3 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4">
                                    27 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    20 Set
                                </td>

                                <td class="px-6 py-4">
                                    PT Suku Cadang
                                </td>

                                <td class="px-6 py-4">
                                    Stok tambahan
                                </td>

                                <td class="px-6 py-4">

                                    <button
                                        type="button"
                                        class="text-gray-900 font-medium hover:underline">
                                        Detail
                                    </button>

                                </td>

                            </tr>


                            <!-- DATA 4 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4">
                                    26 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    40 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    CV Auto Parts
                                </td>

                                <td class="px-6 py-4">
                                    Stok bulanan
                                </td>

                                <td class="px-6 py-4">

                                    <button
                                        type="button"
                                        class="text-gray-900 font-medium hover:underline">
                                        Detail
                                    </button>

                                </td>

                            </tr>


                            <!-- DATA 5 -->
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">
                                    25 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Air Radiator
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    25 Liter
                                </td>

                                <td class="px-6 py-4">
                                    PT Coolant Indonesia
                                </td>

                                <td class="px-6 py-4">
                                    Pengadaan rutin
                                </td>

                                <td class="px-6 py-4">

                                    <button
                                        type="button"
                                        class="text-gray-900 font-medium hover:underline">
                                        Detail
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="px-6 py-4 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1-5 dari 35 transaksi
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