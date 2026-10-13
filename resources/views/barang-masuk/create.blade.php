<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catat Barang Masuk - Bengkel Mobil MM JOKO MOTOR</title>

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

            <a href="#"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Request Stok
            </a>

            <a href="#"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Transfer Stok
            </a>

            <a href="#"
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
                    Catat Barang Masuk
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Tambahkan transaksi barang yang masuk ke gudang
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

            <div class="max-w-4xl">

                <div class="bg-white rounded-xl shadow-sm border">

                    <div class="px-6 py-5 border-b">

                        <h3 class="text-lg font-semibold text-gray-900">
                            Informasi Barang Masuk
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Isi data barang yang diterima oleh gudang.
                        </p>

                    </div>


                    <form class="p-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- TANGGAL -->
                            <div>

                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Tanggal Masuk
                                </label>

                                <input
                                    type="date"
                                    value="2026-09-30"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                                >

                            </div>


                            <!-- BARANG -->
                            <div>

                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nama Barang
                                </label>

                                <select
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

                                    <option value="">
                                        Pilih barang
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

                                    <option>
                                        Air Radiator
                                    </option>

                                </select>

                            </div>


                            <!-- JUMLAH -->
                            <div>

                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Jumlah
                                </label>

                                <input
                                    type="number"
                                    min="1"
                                    placeholder="Contoh: 50"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                                >

                            </div>


                            <!-- SUPPLIER -->
                            <div>

                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Supplier / Sumber
                                </label>

                                <input
                                    type="text"
                                    placeholder="Contoh: PT Oli Jaya"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                                >

                            </div>

                        </div>


                        <!-- KETERANGAN -->
                        <div class="mt-6">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Keterangan
                            </label>

                            <textarea
                                rows="4"
                                placeholder="Contoh: Pengadaan stok bulanan..."
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"></textarea>

                        </div>


                        <!-- BUTTON -->
                        <div class="flex justify-end gap-3 mt-8 pt-6 border-t">

                            <a href="/barang-masuk"
                               class="px-5 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
                                Batal
                            </a>

                            <button
                                type="button"
                                class="px-5 py-3 rounded-lg bg-gray-900 text-white hover:bg-gray-800">
                                Simpan Barang Masuk
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>