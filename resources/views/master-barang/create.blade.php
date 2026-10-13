<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang - Bengkel Mobil MM JOKO MOTOR</title>

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
               class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
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

            <a href="/request-stok"
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


    <!-- MAIN CONTENT -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Tambah Barang
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Tambahkan data barang baru ke master barang
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

                <!-- FORM CARD -->
                <div class="bg-white rounded-xl shadow-sm border">

                    <div class="px-6 py-5 border-b">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Informasi Barang
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Isi informasi barang dengan lengkap.
                        </p>
                    </div>


                    <form class="p-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- NAMA BARANG -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nama Barang
                                </label>

                                <input
                                    type="text"
                                    placeholder="Contoh: Oli Mesin"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                                >
                            </div>


                            <!-- KATEGORI -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Kategori Barang
                                </label>

                                <select
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

                                    <option value="">
                                        Pilih kategori
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


                            <!-- SATUAN -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Satuan
                                </label>

                                <select
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-gray-900">

                                    <option value="">
                                        Pilih satuan
                                    </option>

                                    <option>
                                        Pcs
                                    </option>

                                    <option>
                                        Liter
                                    </option>

                                    <option>
                                        Set
                                    </option>

                                    <option>
                                        Botol
                                    </option>

                                </select>
                            </div>


                            <!-- MINIMUM STOK -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Minimum Stok
                                </label>

                                <input
                                    type="number"
                                    placeholder="Contoh: 10"
                                    min="0"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"
                                >

                                <p class="text-xs text-gray-500 mt-2">
                                    Digunakan sebagai batas untuk menentukan stok menipis.
                                </p>
                            </div>

                        </div>


                        <!-- CATATAN -->
                        <div class="mt-6">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Catatan
                            </label>

                            <textarea
                                rows="4"
                                placeholder="Tambahkan catatan jika diperlukan..."
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-900"></textarea>

                        </div>


                        <!-- BUTTON -->
                        <div class="flex justify-end gap-3 mt-8 pt-6 border-t">

                            <a href="/master-barang"
                               class="px-5 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">
                                Batal
                            </a>

                            <button
                                type="button"
                                class="px-5 py-3 rounded-lg bg-gray-900 text-white hover:bg-gray-800">
                                Simpan Barang
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