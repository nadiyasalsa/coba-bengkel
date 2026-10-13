<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catat Penggunaan Barang - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-gray-100 text-gray-900">


<div class="flex min-h-screen">


    <!-- ====================================================== -->
    <!-- SIDEBAR -->
    <!-- ====================================================== -->

    <aside class="w-64 shrink-0 bg-white border-r border-gray-200">


        <!-- IDENTITAS BENGKEL -->

        <div class="px-6 py-6 border-b border-gray-200">

            <h1 class="text-lg font-bold text-gray-900">

                Bengkel Mobil MM JOKO MOTOR

            </h1>


            <p class="mt-1 text-sm text-gray-500">

                Admin Bengkel

            </p>

        </div>



        <!-- MENU -->

        <nav class="p-4 space-y-2">


            <!-- DASHBOARD -->

            <a
                href="/dashboard/admin-bengkel"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Dashboard

            </a>



            <!-- DATA SERVIS -->

            <a
                href="/service"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Data Servis

            </a>



            <!-- DATA KENDARAAN -->

            <a
                href="/data-kendaraan"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Data Kendaraan

            </a>



            <!-- PENGGUNAAN BARANG - AKTIF -->

            <a
                href="/penggunaan-barang"
                class="block rounded-lg bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900">

                Penggunaan Barang

            </a>



            <!-- STOK BENGKEL -->

            <a
                href="/stok-bengkel"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Stok Bengkel

            </a>



            <!-- REQUEST STOK -->

            <a
                href="/request-stok"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Request Stok

            </a>



            <!-- RIWAYAT PENGGUNAAN -->

            <a
                href="/riwayat-penggunaan"
                class="block rounded-lg px-4 py-3 text-sm text-gray-700 hover:bg-gray-100">

                Riwayat Penggunaan

            </a>



            <!-- LOGOUT -->

            <a
                href="/logout"
                class="block rounded-lg px-4 py-3 text-sm text-red-600 hover:bg-gray-100">

                Logout

            </a>


        </nav>

    </aside>



    <!-- ====================================================== -->
    <!-- MAIN CONTENT -->
    <!-- ====================================================== -->

    <main class="min-w-0 flex-1">


        <!-- ================================================== -->
        <!-- HEADER -->
        <!-- ================================================== -->

        <header class="border-b border-gray-200 bg-white px-8 py-5">

            <div class="flex items-center justify-between">


                <!-- JUDUL -->

                <div>

                    <h2 class="text-2xl font-bold text-gray-900">

                        Catat Penggunaan Barang

                    </h2>


                    <p class="mt-1 text-sm text-gray-500">

                        Catat barang yang digunakan dalam proses servis

                    </p>

                </div>



                <!-- USER -->

                <div class="text-right">

                    <p class="font-medium text-gray-900">

                        Admin Bengkel

                    </p>


                    <p class="mt-1 text-sm text-gray-500">

                        Admin

                    </p>

                </div>


            </div>

        </header>



        <!-- ================================================== -->
        <!-- CONTENT -->
        <!-- ================================================== -->

        <div class="p-8">


            <!-- FORM CARD -->

            <div class="max-w-3xl overflow-hidden rounded-xl border border-gray-200 bg-white">


                <!-- CARD HEADER -->

                <div class="border-b border-gray-200 px-5 py-5">

                    <h3 class="text-lg font-semibold text-gray-900">

                        Form Penggunaan Barang

                    </h3>


                    <p class="mt-1 text-sm text-gray-500">

                        Isi informasi barang yang digunakan untuk servis

                    </p>

                </div>



                <!-- ================================================== -->
                <!-- FORM -->
                <!-- ================================================== -->

                <form
                    action="/penggunaan-barang"
                    method="POST"
                    class="p-5">

                    @csrf



                    <!-- ================================================== -->
                    <!-- SERVIS -->
                    <!-- ================================================== -->

                    <div>


                        <label
                            for="service"
                            class="mb-2 block text-sm font-medium text-gray-700">

                            Servis

                        </label>


                        <select
                            id="service"
                            name="service_id"
                            required
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-slate-500 focus:ring-1 focus:ring-slate-500">


                            <option value="">

                                Pilih Servis

                            </option>



                            @foreach($services as $service)

                                @php

                                    $kendaraan =
                                        $service['kendaraan'] ?? '';


                                    $nomorPolisi =
                                        $service['nomor_polisi'] ?? '';


                                    if (
                                        empty($nomorPolisi) &&
                                        str_contains(
                                            $kendaraan,
                                            ' - '
                                        )
                                    ) {

                                        $parts =
                                            explode(
                                                ' - ',
                                                $kendaraan,
                                                2
                                            );


                                        $kendaraan =
                                            trim($parts[0]);


                                        $nomorPolisi =
                                            trim(
                                                $parts[1] ?? ''
                                            );

                                    }

                                @endphp


                                <option
                                    value="{{ $service['id'] ?? '' }}"
                                    data-pelanggan="{{ $service['pelanggan'] ?? '' }}"
                                    data-kendaraan="{{ $kendaraan }}"
                                    data-nomor-polisi="{{ $nomorPolisi }}">

                                    {{ $service['pelanggan'] ?? '-' }}
                                    —
                                    {{ $kendaraan ?: '-' }}
                                    —
                                    {{ $nomorPolisi ?: '-' }}

                                </option>


                            @endforeach


                        </select>


                        <p class="mt-2 text-xs text-gray-500">

                            Pilih servis yang menggunakan barang.

                        </p>


                    </div>



                    <!-- ================================================== -->
                    <!-- DETAIL SERVIS -->
                    <!-- ================================================== -->

                    <div
                        class="mt-5 rounded-lg border border-gray-200 bg-gray-50 p-4">


                        <h4 class="text-xs font-semibold uppercase tracking-wide text-gray-600">

                            Detail Servis

                        </h4>


                        <div class="mt-4 grid grid-cols-1 gap-5 md:grid-cols-3">


                            <!-- PELANGGAN -->

                            <div>

                                <p class="text-xs text-gray-500">

                                    Pelanggan

                                </p>


                                <p
                                    id="detail-pelanggan"
                                    class="mt-1 text-sm font-medium text-gray-900">

                                    -

                                </p>

                            </div>



                            <!-- KENDARAAN -->

                            <div>

                                <p class="text-xs text-gray-500">

                                    Kendaraan

                                </p>


                                <p
                                    id="detail-kendaraan"
                                    class="mt-1 text-sm font-medium text-gray-900">

                                    -

                                </p>

                            </div>



                            <!-- NOMOR POLISI -->

                            <div>

                                <p class="text-xs text-gray-500">

                                    Nomor Polisi

                                </p>


                                <p
                                    id="detail-nomor-polisi"
                                    class="mt-1 text-sm font-medium text-gray-900">

                                    -

                                </p>

                            </div>


                        </div>

                    </div>



                    <!-- ================================================== -->
                    <!-- BARANG -->
                    <!-- ================================================== -->

                    <div class="mt-5">


                        <label
                            for="barang"
                            class="mb-2 block text-sm font-medium text-gray-700">

                            Barang

                        </label>


                        <select
                            id="barang"
                            name="barang"
                            required
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-slate-500 focus:ring-1 focus:ring-slate-500">


                            <option value="">

                                Pilih Barang

                            </option>


                            @foreach($barangs as $barang)

                                <option value="{{ $barang['nama'] }}">

                                    {{ $barang['nama'] }}

                                </option>

                            @endforeach


                        </select>


                    </div>



                    <!-- ================================================== -->
                    <!-- JUMLAH -->
                    <!-- ================================================== -->

                    <div class="mt-5">


                        <label
                            for="jumlah"
                            class="mb-2 block text-sm font-medium text-gray-700">

                            Jumlah

                        </label>


                        <input
                            type="number"
                            id="jumlah"
                            name="jumlah"
                            min="1"
                            required
                            placeholder="Masukkan jumlah"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-slate-500 focus:ring-1 focus:ring-slate-500">


                    </div>



                    <!-- ================================================== -->
                    <!-- TANGGAL -->
                    <!-- ================================================== -->

                    <div class="mt-5">


                        <label
                            for="tanggal_penggunaan"
                            class="mb-2 block text-sm font-medium text-gray-700">

                            Tanggal Penggunaan

                        </label>


                        <input
                            type="date"
                            id="tanggal_penggunaan"
                            name="tanggal_penggunaan"
                            value="{{ old('tanggal_penggunaan', date('Y-m-d')) }}"
                            required
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-slate-500 focus:ring-1 focus:ring-slate-500">


                    </div>



                    <!-- ================================================== -->
                    <!-- CATATAN -->
                    <!-- ================================================== -->

                    <div class="mt-5">


                        <label
                            for="catatan"
                            class="mb-2 block text-sm font-medium text-gray-700">

                            Catatan

                        </label>


                        <textarea
                            id="catatan"
                            name="catatan"
                            rows="4"
                            placeholder="Masukkan catatan penggunaan barang..."
                            class="w-full resize-none rounded-lg border border-gray-300 px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-slate-500 focus:ring-1 focus:ring-slate-500">{{ old('catatan') }}</textarea>


                    </div>



                    <!-- ================================================== -->
                    <!-- ERROR -->
                    <!-- ================================================== -->

                    @if($errors->any())

                        <div class="mt-5 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">

                            <ul class="ml-5 list-disc">

                                @foreach($errors->all() as $error)

                                    <li>

                                        {{ $error }}

                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    <!-- ================================================== -->
                    <!-- SUCCESS -->
                    <!-- ================================================== -->

                    @if(session('success'))

                        <div class="mt-5 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-700">

                            {{ session('success') }}

                        </div>

                    @endif



                    <!-- ================================================== -->
                    <!-- BUTTON -->
                    <!-- ================================================== -->

                    <div class="mt-7 flex items-center justify-end gap-3 border-t border-gray-200 pt-5">


                        <!-- BATAL -->

                        <a
                            href="/penggunaan-barang"
                            class="rounded-lg border border-gray-300 bg-white px-5 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50">

                            Batal

                        </a>



                        <!-- SIMPAN -->

                        <button
                            type="submit"
                            class="rounded-lg bg-slate-900 px-5 py-3 text-sm font-medium text-white transition hover:bg-slate-800">

                            Simpan Penggunaan

                        </button>


                    </div>


                </form>

            </div>

        </div>

    </main>

</div>



<!-- ========================================================== -->
<!-- JAVASCRIPT -->
<!-- ========================================================== -->

<script>

    const serviceSelect =
        document.getElementById('service');


    if (serviceSelect) {

        serviceSelect.addEventListener(
            'change',
            function () {

                const selected =
                    this.options[this.selectedIndex];


                const pelanggan =
                    selected.dataset.pelanggan || '-';


                const kendaraan =
                    selected.dataset.kendaraan || '-';


                const nomorPolisi =
                    selected.dataset.nomorPolisi || '-';


                document.getElementById(
                    'detail-pelanggan'
                ).textContent = pelanggan;


                document.getElementById(
                    'detail-kendaraan'
                ).textContent = kendaraan;


                document.getElementById(
                    'detail-nomor-polisi'
                ).textContent = nomorPolisi;

            }
        );

    }

</script>


</body>

</html>