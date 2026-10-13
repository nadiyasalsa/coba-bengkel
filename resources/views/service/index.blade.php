<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Servis - Bengkel Mobil MM JOKO MOTOR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r">

            <div class="p-6 border-b">
                <h1 class="text-xl font-bold text-gray-800">
                    Bengkel Mobil MM JOKO MOTOR
                </h1>
                <p class="text-sm text-gray-500">
                    Admin Bengkel
                </p>
            </div>

            <nav class="p-4 space-y-2">

                <a href="/dashboard/admin-bengkel"
                   class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    Dashboard
                </a>

                <a href="/service"
                   class="block px-4 py-3 rounded-lg bg-gray-100 text-gray-900 font-semibold">
                    Data Servis
                </a>

                <a href="data-kendaraan"
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
                   class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    Riwayat Penggunaan
                </a>

                <a href="/logout"
                   class="block px-4 py-3 rounded-lg text-red-600 hover:bg-red-50">
                    Logout
                </a>

            </nav>
        </aside>


        <!-- MAIN CONTENT -->
        @if(session('success'))
        <div class="fixed right-6 top-6 z-50 rounded-lg border border-green-200 bg-green-50 px-5 py-4 shadow-lg">
            <div class="flex items-center gap-3">
                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-600">
                    ✓
                </div>
                <div>
                    <p class="text-sm font-semibold text-green-800">
                    Berhasil
                </p>
                
                <p class="text-sm text-green-700">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </div>
@endif
        
        <main class="flex-1">

            <!-- TOPBAR -->
            <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Data Servis
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Kelola data servis kendaraan pelanggan
                    </p>
                </div>

                <div class="text-right">
                    <p class="font-semibold text-gray-800">
                        Admin Bengkel
                    </p>

                    <p class="text-sm text-gray-500">
                        Admin
                    </p>
                </div>

            </header>


            <!-- CONTENT -->
            <section class="p-8">

                <!-- HEADER TABLE -->
                <div class="bg-white rounded-xl shadow-sm p-6">

                    <div class="flex justify-between items-center mb-6">

                        <div>
                            <h3 class="text-lg font-bold text-gray-800">
                                Daftar Servis
                            </h3>

                            <p class="text-sm text-gray-500">
                                Data servis kendaraan pelanggan
                            </p>
                        </div>

                        <a href="/service/create"
                           class="bg-gray-900 text-white px-5 py-3 rounded-lg hover:bg-gray-800">
                            + Tambah Servis
                        </a>

                    </div>


                    <!-- FILTER -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

                        <input
                            type="text"
                            placeholder="Cari pelanggan atau kendaraan..."
                            class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300"
                        >

                        <select
                            class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300">

                            <option value="">Semua Status</option>
                            <option value="menunggu">Menunggu</option>
                            <option value="dikerjakan">Dikerjakan</option>
                            <option value="selesai">Selesai</option>

                        </select>

                        <input
                            type="date"
                            class="border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-300"
                        >

                    </div>


                    <!-- TABLE -->
                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="border-b bg-gray-50">

                                    <th class="text-left px-4 py-4 font-semibold">
                                        No
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Pelanggan
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Kendaraan
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Layanan
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Tanggal
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Status
                                    </th>

                                    <th class="text-left px-4 py-4 font-semibold">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-gray-200">

                            @forelse($services as $service)

                                <tr class="hover:bg-gray-50">

                                    <!-- NO -->
                                    <td class="px-4 py-4">
                                        {{ $service['id'] }}
                                    </td>

                                    <!-- PELANGGAN -->
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">
                                            {{ $service['pelanggan'] }}
                                        </div>
                                    </td>

                                    <!-- KENDARAAN -->
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">
                                            {{ $service['kendaraan'] }}
                                        </div>

                                        <div class="text-xs text-gray-500">
                                            {{ $service['nomor_polisi'] ?? '-' }}
                                        </div>
                                    </td>

                                    <!-- LAYANAN -->
                                    <td class="px-4 py-4">
                                        {{ $service['layanan'] }}
                                    </td>

                                    <!-- TANGGAL -->
                                    <td class="px-4 py-4">
                                        {{ \Carbon\Carbon::parse($service['tanggal'])->format('d M Y') }}
                                    </td>

                                    <!-- STATUS -->
                                    <td class="px-4 py-4">

                                        @if($service['status'] === 'Selesai')

                                            <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                                Selesai
                                            </span>

                                        @elseif($service['status'] === 'Dikerjakan')

                                            <span class="inline-flex rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                                Dikerjakan
                                            </span>

                                        @else

                                            <span class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                                                Menunggu
                                            </span>

                                        @endif

                                    </td>

                                    <!-- AKSI -->
                                    <td class="px-4 py-4">

                                        <div class="flex gap-2">

                                            <button
                                                type="button"
                                                class="rounded-lg bg-gray-100 px-3 py-2 text-xs font-medium text-gray-700 hover:bg-gray-200">
                                                Detail
                                            </button>

                                            <button
                                                type="button"
                                                class="rounded-lg bg-slate-900 px-3 py-2 text-xs font-medium text-white hover:bg-slate-800">
                                                Edit
                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="px-6 py-10 text-center text-gray-500">
                                        Belum ada data servis.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>


                        </table>

                    </div>


                    <!-- PAGINATION -->
                    <div class="flex justify-between items-center mt-6">

                        <p class="text-sm text-gray-500">
                            Menampilkan 1–3 dari 3 data
                        </p>

                        <div class="flex gap-2">

                            <button class="px-3 py-2 border rounded-lg text-gray-400">
                                ←
                            </button>

                            <button class="px-3 py-2 bg-gray-900 text-white rounded-lg">
                                1
                            </button>

                            <button class="px-3 py-2 border rounded-lg text-gray-400">
                                →
                            </button>

                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>

</body>
</html>