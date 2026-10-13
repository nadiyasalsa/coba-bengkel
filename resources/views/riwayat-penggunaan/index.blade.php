<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Penggunaan - Bengkel Mobil MM JOKO MOTOR</title>

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

            <a href="/dashboard/admin-bengkel"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/service"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Data Servis
            </a>

            <a href="/data-kendaraan"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Data Kendaraan
            </a>

            <a href="/penggunaan-barang"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Penggunaan Barang
            </a>

            <a href="/stok-bengkel"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Stok Bengkel
            </a>

            <a href="/request-stok"
               class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                Request Stok
            </a>

            <a href="/riwayat-penggunaan"
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                Riwayat Penggunaan
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
                    Riwayat Penggunaan Barang
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Melihat riwayat barang yang telah digunakan dalam servis.
                </p>
            </div>

            <div class="text-right">

                <p class="font-semibold">
                    Admin Bengkel
                </p>

                <p class="text-sm text-gray-500">
                    admin.bengkel
                </p>

            </div>

        </header>


        <!-- CONTENT -->
        <section class="p-8">

            <!-- SUMMARY -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white border border-gray-200 rounded-xl p-6">

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


                <div class="bg-white border border-gray-200 rounded-xl p-6">

                    <p class="text-sm text-gray-500">
                        Barang Digunakan
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        28
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        jenis barang
                    </p>

                </div>


                <div class="bg-white border border-gray-200 rounded-xl p-6">

                    <p class="text-sm text-gray-500">
                        Penggunaan Hari Ini
                    </p>

                    <p class="text-3xl font-bold mt-2">
                        12
                    </p>

                    <p class="text-sm text-gray-500 mt-2">
                        penggunaan barang
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
                                Riwayat Penggunaan
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Daftar barang yang digunakan untuk setiap servis.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- FILTER -->
                <div class="p-6 border-b border-gray-200">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                        <input
                            type="text"
                            placeholder="Cari pelanggan / kendaraan..."
                            class="border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <input
                            type="date"
                            class="border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-gray-300">

                        <select
                            class="border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-gray-300">

                            <option>
                                Semua Barang
                            </option>

                            <option>
                                Oli Mesin
                            </option>

                            <option>
                                Filter Oli
                            </option>

                            <option>
                                Kampas Rem
                            </option>

                            <option>
                                Busi
                            </option>

                        </select>

                    </div>

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
                                    Tanggal
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Pelanggan
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Kendaraan
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Barang
                                </th>

                                <th class="text-left px-6 py-4 font-semibold">
                                    Jumlah
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

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Budi Santoso
                                </td>

                                <td class="px-6 py-4">
                                    Toyota Avanza
                                </td>

                                <td class="px-6 py-4">
                                    Oli Mesin
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    4 Liter
                                </td>

                                <td class="px-6 py-4">
                                    <button
                                        type="button"
                                        class="text-gray-700 font-medium hover:underline">
                                        Detail
                                    </button>
                                </td>

                            </tr>


                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    2
                                </td>

                                <td class="px-6 py-4">
                                    29 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Andi Wijaya
                                </td>

                                <td class="px-6 py-4">
                                    Honda Brio
                                </td>

                                <td class="px-6 py-4">
                                    Filter Oli
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    1 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    <button
                                        type="button"
                                        class="text-gray-700 font-medium hover:underline">
                                        Detail
                                    </button>
                                </td>

                            </tr>


                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    3
                                </td>

                                <td class="px-6 py-4">
                                    28 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Siti Aminah
                                </td>

                                <td class="px-6 py-4">
                                    Suzuki Ertiga
                                </td>

                                <td class="px-6 py-4">
                                    Kampas Rem
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    1 Set
                                </td>

                                <td class="px-6 py-4">
                                    <button
                                        type="button"
                                        class="text-gray-700 font-medium hover:underline">
                                        Detail
                                    </button>
                                </td>

                            </tr>


                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">
                                    4
                                </td>

                                <td class="px-6 py-4">
                                    27 Sep 2026
                                </td>

                                <td class="px-6 py-4 font-medium">
                                    Rina Permata
                                </td>

                                <td class="px-6 py-4">
                                    Honda Brio
                                </td>

                                <td class="px-6 py-4">
                                    Busi
                                </td>

                                <td class="px-6 py-4 font-semibold">
                                    4 Pcs
                                </td>

                                <td class="px-6 py-4">
                                    <button
                                        type="button"
                                        class="text-gray-700 font-medium hover:underline">
                                        Detail
                                    </button>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="p-6 border-t border-gray-200 flex justify-between items-center">

                    <p class="text-sm text-gray-500">
                        Menampilkan 1–4 dari 342 penggunaan
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