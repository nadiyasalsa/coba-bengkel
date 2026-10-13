<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Stok - Admin Gudang</title>

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

            <a href="/req-stok-gudang"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Request Stok
            </a>

            <a href="/transfer-stok"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Transfer Stok
            </a>

            <a href="/riwayat-stok"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Riwayat Stok
            </a>

            <a href="/logout"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100 text-red-600">
                Logout
            </a>

        </nav>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Riwayat Stok
                </h2>

                <p class="text-sm text-gray-500">
                    Melihat seluruh aktivitas perubahan stok
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
        <div class="p-8">

            <!-- SUMMARY -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">
                        Total Aktivitas
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        156
                    </p>
                </div>


                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">
                        Barang Masuk
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        35
                    </p>
                </div>


                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">
                        Transfer Stok
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        24
                    </p>
                </div>

            </div>


            <!-- TABLE -->
            <div class="bg-white rounded-xl border">

                <!-- HEADER -->
                <div class="p-6 border-b">

                    <div class="flex justify-between items-center">

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Aktivitas Stok
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Riwayat perubahan jumlah stok barang
                            </p>
                        </div>

                    </div>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b grid grid-cols-1 md:grid-cols-4 gap-4">

                    <input
                        type="text"
                        placeholder="Cari nama barang..."
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">


                    <input
                        type="date"
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">


                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">
                            Semua Aktivitas
                        </option>

                        <option>
                            Barang Masuk
                        </option>

                        <option>
                            Transfer Stok
                        </option>

                        <option>
                            Penggunaan Barang
                        </option>

                    </select>


                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">
                            Semua Lokasi
                        </option>

                        <option>
                            Gudang
                        </option>

                        <option>
                            Bengkel
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
                                    Aktivitas
                                </th>

                                <th class="text-left px-6 py-4">
                                    Lokasi
                                </th>

                                <th class="text-left px-6 py-4">
                                    Jumlah
                                </th>

                                <th class="text-left px-6 py-4">
                                    Stok Sebelum
                                </th>

                                <th class="text-left px-6 py-4">
                                    Stok Sesudah
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">


                            <!-- DATA 1 -->
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

                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Barang Masuk
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    Gudang
                                </td>

                                <td class="px-6 py-4 text-green-600 font-medium">
                                    +50 Liter
                                </td>

                                <td class="px-6 py-4">
                                    70 Liter
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    120 Liter
                                </td>

                            </tr>


                            <!-- DATA 2 -->
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

                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                                        Transfer Stok
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    Gudang
                                </td>

                                <td class="px-6 py-4 text-red-600 font-medium">
                                    -10 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    35 Pcs
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    25 Pcs
                                </td>

                            </tr>


                            <!-- DATA 3 -->
                            <tr>

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                                        Transfer Stok
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    Bengkel
                                </td>

                                <td class="px-6 py-4 text-green-600 font-medium">
                                    +10 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    4 Pcs
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    14 Pcs
                                </td>

                            </tr>


                            <!-- DATA 4 -->
                            <tr>

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs">
                                        Penggunaan Barang
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    Bengkel
                                </td>

                                <td class="px-6 py-4 text-red-600 font-medium">
                                    -4 Liter
                                </td>

                                <td class="px-6 py-4">
                                    19 Liter
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    15 Liter
                                </td>

                            </tr>


                            <!-- DATA 5 -->
                            <tr>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">
                                    28 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                                        Transfer Stok
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    Gudang
                                </td>

                                <td class="px-6 py-4 text-red-600 font-medium">
                                    -10 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    13 Pcs
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    3 Pcs
                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–5 dari 156 aktivitas
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