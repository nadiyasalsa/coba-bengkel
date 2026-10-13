<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penggunaan Barang - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-gray-100 text-gray-900">


<div class="min-h-screen flex">


    <!-- ====================================================== -->
    <!-- SIDEBAR -->
    <!-- ====================================================== -->

    <aside class="w-52 bg-white border-r border-gray-200 flex-shrink-0">


        <div class="px-6 py-6 border-b border-gray-200">

            <h1 class="text-lg font-bold">

                Bengkel Mobil MM JOKO MOTOR

            </h1>


            <p class="text-xs text-gray-500 mt-1">

                Admin Bengkel

            </p>

        </div>



        <nav class="p-4 space-y-1">


            <a
                href="/dashboard/admin-bengkel"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Dashboard

            </a>



            <a
                href="/service"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Data Servis

            </a>



            <a
                href="/data-kendaraan"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Data Kendaraan

            </a>



            <!-- ACTIVE -->

            <a
                href="/penggunaan-barang"
                class="block px-3 py-3 rounded-lg bg-gray-100 font-medium text-sm">

                Penggunaan Barang

            </a>



            <a
                href="/stok-bengkel"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Stok Bengkel

            </a>



            <a
                href="/request-stok"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Request Stok

            </a>



            <a
                href="/riwayat-penggunaan"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm">

                Riwayat Penggunaan

            </a>



            <a
                href="/logout"
                class="block px-3 py-3 rounded-lg hover:bg-gray-100 text-sm text-red-600">

                Logout

            </a>


        </nav>

    </aside>



    <!-- ====================================================== -->
    <!-- MAIN -->
    <!-- ====================================================== -->

    <main class="flex-1 min-w-0">


        <!-- ================================================== -->
        <!-- HEADER -->
        <!-- ================================================== -->

        <header class="bg-white border-b border-gray-200 px-7 py-5 flex items-center justify-between">

            <div>

                <h2 class="text-xl font-bold">

                    Penggunaan Barang

                </h2>


                <p class="text-xs text-gray-500 mt-1">

                    Catat barang yang digunakan dalam proses servis

                </p>

            </div>



            <div class="text-right">

                <p class="text-sm font-medium">

                    Admin Bengkel

                </p>


                <p class="text-xs text-gray-500">

                    Admin

                </p>

            </div>

        </header>



        <!-- ================================================== -->
        <!-- CONTENT -->
        <!-- ================================================== -->

        <div class="p-6">


            <!-- ================================================== -->
            <!-- NOTIFIKASI -->
            <!-- ================================================== -->

            @if(session('success'))

                <div class="mb-4 bg-green-50 border border-green-200 rounded-lg px-5 py-4">

                    <div class="flex items-start gap-3">

                        <div class="mt-0.5 text-green-600">

                            ✓

                        </div>


                        <div>

                            <p class="text-sm font-medium text-green-700">

                                Berhasil

                            </p>


                            <p class="text-xs text-green-600 mt-1">

                                {{ session('success') }}

                            </p>

                        </div>

                    </div>

                </div>

            @endif



            <!-- ================================================== -->
            <!-- ERROR -->
            <!-- ================================================== -->

            @if(session('error'))

                <div class="mb-4 bg-red-50 border border-red-200 rounded-lg px-5 py-4">

                    <div class="flex items-start gap-3">

                        <div class="mt-0.5 text-red-600">

                            !

                        </div>


                        <div>

                            <p class="text-sm font-medium text-red-700">

                                Gagal

                            </p>


                            <p class="text-xs text-red-600 mt-1">

                                {{ session('error') }}

                            </p>

                        </div>

                    </div>

                </div>

            @endif



            <!-- ================================================== -->
            <!-- SUMMARY -->
            <!-- ================================================== -->

            @php

                $totalPenggunaan =
                    collect($penggunaanBarangs)
                        ->sum(function ($item) {

                            return (int) (
                                $item['jumlah'] ?? 0
                            );

                        });


                $jenisBarang =
                    collect($penggunaanBarangs)
                        ->pluck('barang')
                        ->filter()
                        ->unique()
                        ->count();


                $hariIni =
                    date('Y-m-d');


                $penggunaanHariIni =
                    collect($penggunaanBarangs)
                        ->filter(function ($item) use ($hariIni) {

                            $tanggal =
                                $item['tanggal_penggunaan']
                                ?? $item['tanggal']
                                ?? null;


                            if (!$tanggal) {

                                return false;

                            }


                            return date(
                                'Y-m-d',
                                strtotime($tanggal)
                            ) === $hariIni;

                        })
                        ->count();

            @endphp



            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">


                <!-- TOTAL -->

                <div class="bg-white border border-gray-200 rounded-xl p-5">

                    <p class="text-xs text-gray-500">

                        Total Penggunaan

                    </p>


                    <p class="text-2xl font-bold mt-2">

                        {{ $totalPenggunaan }}

                    </p>


                    <p class="text-xs text-gray-500 mt-1">

                        Jumlah barang digunakan

                    </p>

                </div>



                <!-- JENIS -->

                <div class="bg-white border border-gray-200 rounded-xl p-5">

                    <p class="text-xs text-gray-500">

                        Barang Digunakan

                    </p>


                    <p class="text-2xl font-bold mt-2">

                        {{ $jenisBarang }}

                    </p>


                    <p class="text-xs text-gray-500 mt-1">

                        Jenis barang

                    </p>

                </div>



                <!-- HARI INI -->

                <div class="bg-white border border-gray-200 rounded-xl p-5">

                    <p class="text-xs text-gray-500">

                        Penggunaan Hari Ini

                    </p>


                    <p class="text-2xl font-bold mt-2">

                        {{ $penggunaanHariIni }}

                    </p>


                    <p class="text-xs text-gray-500 mt-1">

                        Jumlah transaksi hari ini

                    </p>

                </div>

            </div>



            <!-- ================================================== -->
            <!-- TABLE CARD -->
            <!-- ================================================== -->

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">


                <!-- HEADER TABLE -->

                <div class="px-5 py-5">

                    <div class="flex items-center justify-between">


                        <div>

                            <h3 class="font-semibold">

                                Riwayat Penggunaan Barang

                            </h3>


                            <p class="text-xs text-gray-500 mt-1">

                                Barang yang telah digunakan dalam servis

                            </p>

                        </div>



                        <a
                            href="/penggunaan-barang/create"
                            class="px-5 py-3 rounded-lg bg-gray-900 text-white text-sm font-medium hover:bg-gray-800">

                            + Catat Penggunaan

                        </a>


                    </div>



                    <!-- FILTER -->

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-5">


                        <input
                            type="text"
                            placeholder="Cari barang atau pelanggan..."
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm">



                        <input
                            type="date"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm">



                        <select
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm">


                            <option>

                                Semua Barang

                            </option>


                            @foreach(
                                collect($penggunaanBarangs)
                                ->pluck('barang')
                                ->filter()
                                ->unique()
                                as $barang
                            )

                                <option>

                                    {{ $barang }}

                                </option>

                            @endforeach


                        </select>

                    </div>

                </div>



                <!-- ================================================== -->
                <!-- TABLE -->
                <!-- ================================================== -->

                <div class="px-5 pb-5 overflow-x-auto">

                    <table class="w-full text-sm">


                        <thead>

                            <tr class="border-y border-gray-200 bg-gray-50">


                                <th class="px-3 py-4 text-left font-medium">

                                    No

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Tanggal

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Pelanggan

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Kendaraan

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Barang

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Jumlah

                                </th>


                                <th class="px-3 py-4 text-left font-medium">

                                    Aksi

                                </th>


                            </tr>

                        </thead>



                        <tbody>


                            @forelse(
                                $penggunaanBarangs
                                as $index => $penggunaan
                            )

                                <tr class="border-b border-gray-200">


                                    <!-- NO -->

                                    <td class="px-3 py-4">

                                        {{ $index + 1 }}

                                    </td>



                                    <!-- TANGGAL -->

                                    <td class="px-3 py-4">

                                        @php

                                            $tanggal =
                                                $penggunaan[
                                                    'tanggal_penggunaan'
                                                ]
                                                ?? $penggunaan[
                                                    'tanggal'
                                                ]
                                                ?? null;

                                        @endphp


                                        {{ $tanggal
                                            ? \Carbon\Carbon::parse($tanggal)->format('d M Y')
                                            : '-'
                                        }}

                                    </td>



                                    <!-- PELANGGAN -->

                                    <td class="px-3 py-4">

                                        <div class="font-medium text-gray-900">

                                            {{ $penggunaan['pelanggan'] ?? '-' }}

                                        </div>

                                    </td>



                                    <!-- KENDARAAN -->

                                    <td class="px-3 py-4">

                                        <div class="font-medium text-gray-900">

                                            {{ $penggunaan['kendaraan'] ?? '-' }}

                                        </div>


                                        <div class="text-xs text-gray-500">

                                            {{ $penggunaan['nomor_polisi'] ?? '-' }}

                                        </div>

                                    </td>



                                    <!-- BARANG -->

                                    <td class="px-3 py-4">

                                        {{ $penggunaan['barang'] ?? '-' }}

                                    </td>



                                    <!-- JUMLAH -->

                                    <td class="px-3 py-4">

                                        {{ $penggunaan['jumlah'] ?? '-' }}

                                    </td>



                                    <!-- AKSI -->

                                    <td class="px-3 py-4">


                                        <button
                                            type="button"
                                            class="px-3 py-2 rounded-lg bg-gray-100 text-xs font-medium hover:bg-gray-200">

                                            Detail

                                        </button>


                                    </td>


                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="7"
                                        class="px-4 py-10 text-center text-sm text-gray-500">

                                        Belum ada data penggunaan barang.

                                    </td>

                                </tr>

                            @endforelse


                        </tbody>

                    </table>



                    <!-- FOOTER -->

                    <div class="flex items-center justify-between mt-5">


                        <p class="text-xs text-gray-500">

                            Menampilkan

                            {{ count($penggunaanBarangs) }}

                            data

                        </p>


                        <div class="flex gap-2">


                            <button
                                type="button"
                                class="w-8 h-8 rounded-lg border border-gray-300 text-sm">

                                ←

                            </button>


                            <button
                                type="button"
                                class="w-8 h-8 rounded-lg bg-gray-900 text-white text-sm">

                                1

                            </button>


                            <button
                                type="button"
                                class="w-8 h-8 rounded-lg border border-gray-300 text-sm">

                                →

                            </button>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>


</body>

</html>