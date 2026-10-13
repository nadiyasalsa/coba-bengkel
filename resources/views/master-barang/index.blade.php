<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Master Barang - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200 p-6">

        <h1 class="text-xl font-bold mb-8">
            Bengkel Mobil MM JOKO MOTOR
        </h1>

        <nav class="space-y-2">

            <a href="/dashboard/admin-gudang"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/master-barang"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Master Barang
            </a>

            <a href="/stok-gudang"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Stok Gudang
            </a>

            <a href="/barang-masuk"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Barang Masuk
            </a>

            <a href="/req-stok-gudang"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Request Stok
            </a>

            <a href="#"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Transfer Stok
            </a>

            <a href="/riwayat-stok"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
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
        <header class="bg-white border-b border-gray-200 px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold">
                    Master Barang
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Mengelola data barang yang digunakan oleh bengkel.
                </p>
            </div>

            <div class="text-right">

                <p class="font-semibold">
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

                <div class="bg-white border border-gray-200 rounded-xl p-6">

                    <p class="text-sm text-gray-500">
                        Total Jenis Barang
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        45
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        jenis barang
                    </p>

                </div>


                <div class="bg-white border border-gray-200 rounded-xl p-6">

                    <p class="text-sm text-gray-500">
                        Kategori Barang
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        8
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        kategori
                    </p>

                </div>


                <div class="bg-white border border-gray-200 rounded-xl p-6">

                    <p class="text-sm text-gray-500">
                        Stok Menipis
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        6
                    </p>

                    <p class="text-sm text-red-600 mt-2">
                        perlu diperhatikan
                    </p>

                </div>

            </div>


            <!-- TABLE -->
            <div class="bg-white border border-gray-200 rounded-xl">

                <!-- HEADER -->
                <div class="p-6 border-b border-gray-200">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                        <div>

                            <h3 class="text-lg font-bold">
                                Daftar Barang
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Data barang yang dikelola oleh gudang.
                            </p>

                        </div>
                        
                        <a href="/master-barang/create"
                            class="bg-gray-900 text-white px-5 py-3 rounded-lg hover:bg-gray-800">
                             + Tambah Barang
                            </a>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b border-gray-200 flex flex-col md:flex-row gap-3">

                    <input
                        type="text"
                        placeholder="Cari nama barang..."
                        class="border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-gray-300">

                    <select
                        class="border border-gray-300 rounded-lg px-4 py-2.5">

                        <option>
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

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead class="bg-gray-50 border-b border-gray-200">

                            <tr>

                                <th class="text-left px-6 py-4 font-semibold">
                                    No
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Nama Barang
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Kategori
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Satuan
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Minimum Stok
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-200">

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

                                <td class="px-6 py-4">
                                    Liter
                                </td>

                                <td class="px-6 py-4">
                                    10
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex gap-3">

                                        <button
                                            type="button"
                                            class="text-gray-700 font-medium hover:underline">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="text-red-600 font-medium hover:underline">
                                            Hapus
                                        </button>

                                    </div>

                                </td>

                            </tr>


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

                                <td class="px-6 py-4">
                                    Pcs
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex gap-3">

                                        <button
                                            type="button"
                                            class="text-gray-700 font-medium hover:underline">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="text-red-600 font-medium hover:underline">
                                            Hapus
                                        </button>

                                    </div>

                                </td>

                            </tr>


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

                                <td class="px-6 py-4">
                                    Set
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex gap-3">

                                        <button
                                            type="button"
                                            class="text-gray-700 font-medium hover:underline">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="text-red-600 font-medium hover:underline">
                                            Hapus
                                        </button>

                                    </div>

                                </td>

                            </tr>


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

                                <td class="px-6 py-4">
                                    Pcs
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex gap-3">

                                        <button
                                            type="button"
                                            class="text-gray-700 font-medium hover:underline">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="text-red-600 font-medium hover:underline">
                                            Hapus
                                        </button>

                                    </div>

                                </td>

                            </tr>


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

                                <td class="px-6 py-4">
                                    Liter
                                </td>

                                <td class="px-6 py-4">
                                    5
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex gap-3">

                                        <button
                                            type="button"
                                            class="text-gray-700 font-medium hover:underline">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="text-red-600 font-medium hover:underline">
                                            Hapus
                                        </button>

                                    </div>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t border-gray-200 flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–5 dari 45 barang
                    </p>

                    <div class="flex gap-2">

                        <button
                            class="px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            Sebelumnya
                        </button>

                        <button
                            class="px-3 py-2 bg-gray-900 text-white rounded-lg text-sm">
                            1
                        </button>

                        <button
                            class="px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            2
                        </button>

                        <button
                            class="px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            3
                        </button>

                        <button
                            class="px-3 py-2 border border-gray-300 rounded-lg text-sm">
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