<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request Stok - Admin Gudang</title>

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
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Barang Masuk
            </a>

            <a href="/request-stok-gudang"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Request Stok
            </a>

            <a href="/transfer-stok"
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
                    Request Stok
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Kelola permintaan stok dari Admin Bengkel
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
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

                <div class="bg-white rounded-xl shadow-sm border p-6">

                    <p class="text-sm text-gray-500">
                        Total Request
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mt-2">
                        18
                    </h3>

                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">

                    <p class="text-sm text-gray-500">
                        Menunggu
                    </p>

                    <h3 class="text-3xl font-bold text-yellow-600 mt-2">
                        4
                    </h3>

                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">

                    <p class="text-sm text-gray-500">
                        Disetujui
                    </p>

                    <h3 class="text-3xl font-bold text-green-600 mt-2">
                        12
                    </h3>

                </div>


                <div class="bg-white rounded-xl shadow-sm border p-6">

                    <p class="text-sm text-gray-500">
                        Ditolak
                    </p>

                    <h3 class="text-3xl font-bold text-red-600 mt-2">
                        2
                    </h3>

                </div>

            </div>


            <!-- TABLE CARD -->
            <div class="bg-white rounded-xl shadow-sm border">

                <div class="p-6 border-b">

                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">
                            Daftar Request Stok
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Permintaan stok yang diajukan oleh Admin Bengkel.
                        </p>
                    </div>


                    <!-- FILTER -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

                        <input
                            type="text"
                            placeholder="Cari barang..."
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >


                        <input
                            type="date"
                            class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                        >


                        <select
                            class="border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

                            <option value="">
                                Semua Status
                            </option>

                            <option>
                                Menunggu
                            </option>

                            <option>
                                Disetujui
                            </option>

                            <option>
                                Diproses
                            </option>

                            <option>
                                Ditolak
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
                                    Tanggal
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Barang
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Jumlah
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Stok Gudang
                                </th>

                                <th class="px-6 py-4 font-semibold">
                                    Status
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
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    10 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    25 Pcs
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                                        Menunggu
                                    </span>

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
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    20 Liter
                                </td>

                                <td class="px-6 py-4">
                                    120 Liter
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        Disetujui
                                    </span>

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
                                    Busi
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    10 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    3 Pcs
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                        Ditolak
                                    </span>

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
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    5 Set
                                </td>

                                <td class="px-6 py-4">
                                    25 Set
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                        Diproses
                                    </span>

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
                        Menampilkan 1-4 dari 18 request
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