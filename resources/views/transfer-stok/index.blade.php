<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Stok - Admin Gudang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r">

        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-gray-900">Bengkel Mobil MM JOKO MOTOR</h1>
            <p class="text-sm text-gray-500">Admin Gudang</p>
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
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Transfer Stok
            </a>

            <a href="/riwayat-stok"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
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
                    Transfer Stok
                </h2>
                <p class="text-sm text-gray-500">
                    Mengelola transfer stok dari gudang ke bengkel
                </p>
            </div>

            <div class="text-right">
                <p class="font-semibold text-gray-900">Admin Gudang</p>
                <p class="text-sm text-gray-500">admin.gudang</p>
            </div>
        </header>


        <div class="p-8">

            <!-- SUMMARY -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">Total Transfer</p>
                    <p class="text-3xl font-bold mt-2">24</p>
                </div>

                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">Transfer Bulan Ini</p>
                    <p class="text-3xl font-bold mt-2">18</p>
                </div>

                <div class="bg-white p-6 rounded-xl border">
                    <p class="text-sm text-gray-500">Transfer Hari Ini</p>
                    <p class="text-3xl font-bold mt-2">3</p>
                </div>

            </div>


            <!-- HEADER TABLE -->
            <div class="bg-white rounded-xl border">

                <div class="p-6 border-b flex justify-between items-center">

                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">
                            Riwayat Transfer Stok
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Daftar perpindahan barang dari gudang ke bengkel
                        </p>
                    </div>

                    <a href="/transfer-stok/create"
                       class="bg-gray-900 text-white px-5 py-3 rounded-lg hover:bg-gray-800">
                        + Transfer Stok
                    </a>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b grid grid-cols-1 md:grid-cols-3 gap-4">

                    <input
                        type="text"
                        placeholder="Cari nama barang..."
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                    <input
                        type="date"
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                    <select
                        class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <option value="">Semua Status</option>
                        <option>Selesai</option>
                        <option>Diproses</option>

                    </select>

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="bg-gray-50 border-b">
                            <tr>
                                <th class="text-left px-6 py-4">No</th>
                                <th class="text-left px-6 py-4">Tanggal</th>
                                <th class="text-left px-6 py-4">Barang</th>
                                <th class="text-left px-6 py-4">Jumlah</th>
                                <th class="text-left px-6 py-4">Dari</th>
                                <th class="text-left px-6 py-4">Ke</th>
                                <th class="text-left px-6 py-4">Status</th>
                                <th class="text-left px-6 py-4">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">

                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4">29 Sep 2026</td>
                                <td class="px-6 py-4 font-medium">
                                    Filter Oli
                                </td>
                                <td class="px-6 py-4">10 Pcs</td>
                                <td class="px-6 py-4">Gudang</td>
                                <td class="px-6 py-4">Bengkel</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button"
                                            class="text-gray-700 hover:underline">
                                        Detail
                                    </button>
                                </td>
                            </tr>


                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">28 Sep 2026</td>
                                <td class="px-6 py-4 font-medium">
                                    Oli Mesin
                                </td>
                                <td class="px-6 py-4">20 Liter</td>
                                <td class="px-6 py-4">Gudang</td>
                                <td class="px-6 py-4">Bengkel</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button"
                                            class="text-gray-700 hover:underline">
                                        Detail
                                    </button>
                                </td>
                            </tr>


                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">27 Sep 2026</td>
                                <td class="px-6 py-4 font-medium">
                                    Kampas Rem
                                </td>
                                <td class="px-6 py-4">5 Set</td>
                                <td class="px-6 py-4">Gudang</td>
                                <td class="px-6 py-4">Bengkel</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs">
                                        Diproses
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button"
                                            class="text-gray-700 hover:underline">
                                        Detail
                                    </button>
                                </td>
                            </tr>


                            <tr>
                                <td class="px-6 py-4">4</td>
                                <td class="px-6 py-4">26 Sep 2026</td>
                                <td class="px-6 py-4 font-medium">
                                    Busi
                                </td>
                                <td class="px-6 py-4">10 Pcs</td>
                                <td class="px-6 py-4">Gudang</td>
                                <td class="px-6 py-4">Bengkel</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <button type="button"
                                            class="text-gray-700 hover:underline">
                                        Detail
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–4 dari 24 data
                    </p>

                    <div class="flex gap-2">
                        <button type="button"
                                class="px-4 py-2 border rounded-lg">
                            Sebelumnya
                        </button>

                        <button type="button"
                                class="px-4 py-2 bg-gray-900 text-white rounded-lg">
                            1
                        </button>

                        <button type="button"
                                class="px-4 py-2 border rounded-lg">
                            2
                        </button>

                        <button type="button"
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