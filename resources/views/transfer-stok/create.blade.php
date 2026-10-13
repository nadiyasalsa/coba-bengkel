<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Stok - Bengkel Mobil MM JOKO MOTOR</title>
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


    <!-- MAIN -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Transfer Stok
                </h2>

                <p class="text-sm text-gray-500">
                    Memindahkan stok dari gudang ke bengkel
                </p>
            </div>

            <div class="text-right">
                <p class="font-semibold text-gray-900">Admin Gudang</p>
                <p class="text-sm text-gray-500">admin.gudang</p>
            </div>

        </header>


        <!-- FORM -->
        <div class="p-8">

            <div class="max-w-3xl bg-white border rounded-xl">

                <div class="p-6 border-b">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Form Transfer Stok
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Isi data barang yang akan dipindahkan ke bengkel.
                    </p>

                </div>


                <div class="p-6 space-y-6">

                    <!-- TANGGAL -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Tanggal Transfer
                        </label>

                        <input
                            type="date"
                            value="2026-09-30"
                            class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    </div>


                    <!-- REQUEST -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Request Stok
                        </label>

                        <select
                            class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                            <option value="">
                                Pilih request stok
                            </option>

                            <option>
                                Request #001 - Filter Oli - 10 Pcs
                            </option>

                            <option>
                                Request #002 - Oli Mesin - 20 Liter
                            </option>

                            <option>
                                Request #003 - Kampas Rem - 5 Set
                            </option>

                        </select>
                    </div>


                    <!-- BARANG -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Nama Barang
                        </label>

                        <select
                            class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                            <option value="">
                                Pilih barang
                            </option>

                            <option>Filter Oli</option>
                            <option>Oli Mesin</option>
                            <option>Kampas Rem</option>
                            <option>Busi</option>
                            <option>Air Radiator</option>

                        </select>
                    </div>


                    <!-- STOK -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Stok Gudang
                            </label>

                            <input
                                type="text"
                                value="25 Pcs"
                                readonly
                                class="w-full border rounded-lg px-4 py-3 bg-gray-100 text-gray-600">
                        </div>


                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Jumlah Transfer
                            </label>

                            <input
                                type="number"
                                placeholder="Masukkan jumlah"
                                class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        </div>

                    </div>


                    <!-- DARI -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Dari
                            </label>

                            <input
                                type="text"
                                value="Gudang"
                                readonly
                                class="w-full border rounded-lg px-4 py-3 bg-gray-100 text-gray-600">
                        </div>


                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Ke
                            </label>

                            <input
                                type="text"
                                value="Bengkel"
                                readonly
                                class="w-full border rounded-lg px-4 py-3 bg-gray-100 text-gray-600">
                        </div>

                    </div>


                    <!-- KETERANGAN -->
                    <div>

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Keterangan
                        </label>

                        <textarea
                            rows="4"
                            placeholder="Tambahkan keterangan jika diperlukan..."
                            class="w-full border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300"></textarea>

                    </div>


                    <!-- INFO -->
                    <div class="bg-gray-50 border rounded-lg p-4">

                        <p class="text-sm font-medium text-gray-700">
                            Informasi Transfer
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Stok gudang akan berkurang dan stok bengkel akan bertambah
                            setelah transfer diproses.
                        </p>

                    </div>


                    <!-- BUTTON -->
                    <div class="flex justify-end gap-3 pt-4">

                        <a href="/transfer-stok"
                           class="px-5 py-3 border rounded-lg hover:bg-gray-50">
                            Batal
                        </a>

                        <button
                            type="button"
                            class="px-5 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800">
                            Simpan Transfer
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>