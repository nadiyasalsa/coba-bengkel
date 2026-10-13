<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Servis - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200">

        <div class="px-6 py-6 border-b border-gray-200">
            <h1 class="text-lg font-bold">
                Bengkel Mobil MM JOKO MOTOR
            </h1>

            <p class="text-sm text-gray-500">
                Admin Bengkel
            </p>
        </div>

        <nav class="p-4 space-y-2">

            <a href="/dashboard/admin-bengkel"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
                Dashboard
            </a>

            <a href="/service"
               class="block px-4 py-3 rounded-lg bg-gray-100 font-medium">
                Data Servis
            </a>

            <a href="/data-kendaraan"
               class="block px-4 py-3 rounded-lg hover:bg-gray-100">
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
                        Tambah Servis
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Tambahkan data servis kendaraan pelanggan
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

                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-semibold">
                        Form Data Servis
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Isi informasi servis kendaraan pelanggan
                    </p>
                </div>


                <!-- FORM -->
                <form action="/service" method="POST">

                    @csrf

                    <div class="p-6 space-y-6">

                        <!-- PELANGGAN -->
                         <div>
                            <label class="block text-sm font-medium mb-2">
                                Nama Pelanggan
                            </label>
                            
                            <input
                            type="text"
                            name="pelanggan"
                            required
                            placeholder="Masukkan nama pelanggan"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500">
                        </div>


                        <!-- NOMOR POLISI -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Nomor Polisi
                            </label>

                            <input
                            type="text"
                            name="nomor_polisi"
                            required
                            placeholder="Contoh: R 1234 AB"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 uppercase focus:border-slate-500 focus:ring-1 focus:ring-slate-500">
                        </div>


                        <!-- KENDARAAN -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Kendaraan
                            </label>

                            <input
                                type="text"
                                name="kendaraan"
                                required
                                placeholder="Contoh: Toyota Avanza 2022"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500">
                        </div>    


                        <!-- LAYANAN -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Layanan
                            </label>

                            <select
                                name="layanan"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500">

                                <option value="">
                                    Pilih Layanan
                                </option>

                                <option value="Service Berkala">
                                    Service Berkala
                                </option>

                                <option value="Ganti Oli">
                                    Ganti Oli
                                </option>

                                <option value="Tune Up">
                                    Tune Up
                                </option>

                                <option value="Ganti Kampas Rem">
                                    Ganti Kampas Rem
                                </option>

                            </select>
                        </div>


                        <!-- TANGGAL -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Tanggal Servis
                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500">
                        </div>


                        <!-- KELUHAN -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Keluhan
                            </label>

                            <textarea
                                name="keluhan"
                                rows="4"
                                placeholder="Masukkan keluhan pelanggan..."
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500"></textarea>
                        </div>


                        <!-- STATUS -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Status
                            </label>

                            <select
                                name="status"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500">

                                <option value="">
                                    Pilih Status
                                </option>

                                <option value="Menunggu">
                                    Menunggu
                                </option>

                                <option value="Dikerjakan">
                                    Dikerjakan
                                </option>

                                <option value="Selesai">
                                    Selesai
                                </option>

                            </select>
                        </div>


                        <!-- CATATAN -->
                        <div>
                            <label class="block text-sm font-medium mb-2">
                                Catatan
                            </label>

                            <textarea
                                name="catatan"
                                rows="3"
                                placeholder="Masukkan catatan tambahan..."
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-slate-500 focus:ring-1 focus:ring-slate-500"></textarea>
                        </div>

                    </div>


                    <!-- BUTTON -->
                    <div class="flex justify-end gap-3 px-6 py-5 border-t border-gray-200">

                        <a
                            href="/service"
                            class="rounded-lg border border-gray-300 px-5 py-3 text-sm font-medium hover:bg-gray-50">
                            Batal
                        </a>

                        <button
                            type="submit"
                            class="rounded-lg bg-slate-900 px-5 py-3 text-sm font-medium text-white hover:bg-slate-800">
                            Simpan Servis
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>

</div>

</body>
</html>