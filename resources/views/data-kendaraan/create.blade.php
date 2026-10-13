<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Kendaraan - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200">

        <!-- IDENTITAS -->
        <div class="px-6 py-6 border-b border-gray-200">
            <h1 class="text-lg font-bold">
                Bengkel Mobil MM JOKO MOTOR
            </h1>

            <p class="text-sm text-gray-500">
                Admin Bengkel
            </p>
        </div>

        <!-- MENU -->
        <nav class="p-4 space-y-2">

            <a href="/dashboard/admin-bengkel"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/service"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Data Servis
            </a>

            <a href="/data-kendaraan"
                class="block px-4 py-3 rounded-lg bg-gray-100 font-medium">
                Data Kendaraan
            </a>

            <a href="/penggunaan-barang"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Penggunaan Barang
            </a>

            <a href="/stok-bengkel"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Stok Bengkel
            </a>

            <a href="/request-stok"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Request Stok
            </a>

            <a href="/riwayat-penggunaan"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Riwayat Penggunaan
            </a>

            <a href="/logout"
                class="block px-4 py-3 rounded-lg hover:bg-gray-100 text-red-600">
                Logout
            </a>

        </nav>

    </aside>


    <!-- MAIN -->
    <main class="flex-1">

        <!-- HEADER -->
        <header class="bg-white border-b border-gray-200 px-8 py-5">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-2xl font-bold">
                        Tambah Kendaraan
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Tambahkan data kendaraan pelanggan
                    </p>
                </div>

                <div class="text-right">

                    <p class="font-medium">
                        Admin Bengkel
                    </p>

                    <p class="text-sm text-gray-500">
                        Admin
                    </p>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <div class="p-8">

            <div class="max-w-4xl bg-white rounded-xl shadow-sm border border-gray-200">


                <!-- CARD HEADER -->
                <div class="px-6 py-5 border-b border-gray-200">

                    <h3 class="text-lg font-semibold">
                        Form Data Kendaraan
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Isi informasi kendaraan pelanggan
                    </p>

                </div>


                <!-- FORM -->
                <form action="/data-kendaraan" method="POST">

                    @csrf

                    <div class="p-6 space-y-6">


                        <!-- PEMILIK -->
                        <div>

                            <label
                                for="pemilik"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Pemilik Kendaraan
                            </label>

                            <input
                                id="pemilik"
                                type="text"
                                name="pemilik"
                                required
                                placeholder="Masukkan nama pemilik"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500">

                        </div>


                        <!-- NOMOR POLISI -->
                        <div>

                            <label
                                for="nomor_polisi"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Nomor Polisi
                            </label>

                            <input
                                id="nomor_polisi"
                                type="text"
                                name="nomor_polisi"
                                required
                                placeholder="Contoh: R 1234 AB"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm uppercase focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500">

                            <p class="mt-1.5 text-xs text-gray-500">
                                Masukkan nomor polisi sesuai dengan kendaraan.
                            </p>

                        </div>


                        <!-- MEREK -->
                        <div>

                            <label
                                for="merek"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Merek Kendaraan
                            </label>

                            <input
                                id="merek"
                                type="text"
                                name="merek"
                                required
                                placeholder="Contoh: Toyota"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500">

                        </div>


                        <!-- TIPE -->
                        <div>

                            <label
                                for="tipe"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Tipe Kendaraan
                            </label>

                            <input
                                id="tipe"
                                type="text"
                                name="tipe"
                                required
                                placeholder="Contoh: Avanza"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500">

                        </div>


                        <!-- TAHUN -->
                        <div>

                            <label
                                for="tahun"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Tahun Kendaraan
                            </label>

                            <input
                                id="tahun"
                                type="number"
                                name="tahun"
                                required
                                min="1900"
                                max="2099"
                                placeholder="Contoh: 2022"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500">

                        </div>


                        <!-- CATATAN -->
                        <div>

                            <label
                                for="catatan"
                                class="block text-sm font-medium text-gray-700 mb-2">
                                Catatan
                            </label>

                            <textarea
                                id="catatan"
                                name="catatan"
                                rows="4"
                                placeholder="Masukkan catatan kendaraan..."
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-slate-500 focus:outline-none focus:ring-1 focus:ring-slate-500"></textarea>

                        </div>

                    </div>


                    <!-- FOOTER BUTTON -->
                    <div class="flex justify-end gap-3 px-6 py-5 border-t border-gray-200">

                        <!-- BATAL -->
                        <a
                            href="/data-kendaraan"
                            class="rounded-lg border border-gray-300 bg-white px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Batal
                        </a>


                        <!-- SIMPAN -->
                        <button
                            type="submit"
                            class="rounded-lg bg-slate-900 px-5 py-3 text-sm font-medium text-white hover:bg-slate-800">
                            Simpan Kendaraan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

</div>

</body>

</html>