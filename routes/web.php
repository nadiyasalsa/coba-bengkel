<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// login
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {

    $username = $request->input('username');
    $password = $request->input('password');

    $accounts = [

        'admin.bengkel' => [
            'password' => 'bengkel123',
            'role' => 'admin_bengkel',
            'redirect' => '/dashboard/admin-bengkel',
        ],

        'admin.gudang' => [
            'password' => 'gudang123',
            'role' => 'admin_gudang',
            'redirect' => '/dashboard/admin-gudang',
        ],

        'owner' => [
            'password' => 'owner123',
            'role' => 'owner',
            'redirect' => '/dashboard/owner',
        ],

    ];

    if (
        isset($accounts[$username]) &&
        $accounts[$username]['password'] === $password
    ) {

        session([
            'is_logged_in' => true,
            'username' => $username,
            'role' => $accounts[$username]['role'],
        ]);

        return redirect($accounts[$username]['redirect']);
    }

    return back()
        ->withInput()
        ->with('error', 'Username atau password salah.');
});


// logout
Route::get('/logout', function () {

    session()->flush();

    return redirect('/login');
});


// admin bengkel
Route::get('/dashboard/admin-bengkel', function () {
    return view('dashboard.admin-bengkel');
});

Route::get('/dashboard/admin-gudang', function () {
    return view('dashboard.admin-gudang');
});

Route::get('/dashboard/owner', function () {
    return view('dashboard.owner');
});

// DATA SERVIS
Route::get('/service', function () {

    $services = session('services');

    // Data awal / contoh
    if ($services === null) {
        $services = [
            [
                'id' => 1,
                'pelanggan' => 'Budi Santoso',
                'kendaraan' => 'Toyota Avanza - B 1234 ABC',
                'layanan' => 'Service Berkala',
                'tanggal' => '2026-09-23',
                'keluhan' => 'Servis rutin',
                'status' => 'Dikerjakan',
                'catatan' => '',
            ],
            [
                'id' => 2,
                'pelanggan' => 'Andi Wijaya',
                'kendaraan' => 'Honda Brio - R 5678 DEF',
                'layanan' => 'Ganti Oli',
                'tanggal' => '2026-09-23',
                'keluhan' => 'Ganti oli mesin',
                'status' => 'Selesai',
                'catatan' => '',
            ],
            [
                'id' => 3,
                'pelanggan' => 'Siti Aminah',
                'kendaraan' => 'Suzuki Ertiga - R 9012 GHI',
                'layanan' => 'Tune Up',
                'tanggal' => '2026-09-22',
                'keluhan' => 'Mesin kurang responsif',
                'status' => 'Menunggu',
                'catatan' => '',
            ],
        ];

        session(['services' => $services]);
    }

    return view('service.index', compact('services'));
});


Route::get('/service/create', function () {
    return view('service.create');
});


Route::post('/service', function (Request $request) {

    $services = session('services', []);

    $services[] = [
        'id' => count($services) + 1,
        'pelanggan' => $request->input('pelanggan'),
        'nomor_polisi' => $request->input('nomor_polisi'),
        'kendaraan' => $request->input('kendaraan'),
        'layanan' => $request->input('layanan'),
        'tanggal' => $request->input('tanggal'),
        'keluhan' => $request->input('keluhan'),
        'status' => $request->input('status'),
        'catatan' => $request->input('catatan'),
    ];

    session(['services' => $services]);

    return redirect('/service')
        ->with('success', 'Data servis berhasil ditambahkan.');
});


// ==========================================
// DATA KENDARAAN
// ==========================================

Route::get('/data-kendaraan', function () {

    $vehicles = session('vehicles', []);

    // Jika belum ada data kendaraan,
    // masukkan data contoh
    if (empty($vehicles)) {

        $vehicles = [
            [
                'id' => 1,
                'pemilik' => 'Budi Santoso',
                'nomor_polisi' => 'B 1234 ABC',
                'merek' => 'Toyota',
                'tipe' => 'Avanza',
                'tahun' => '2022',
                'catatan' => '',
            ],

            [
                'id' => 2,
                'pemilik' => 'Andi Wijaya',
                'nomor_polisi' => 'R 5678 DEF',
                'merek' => 'Honda',
                'tipe' => 'Brio',
                'tahun' => '2021',
                'catatan' => '',
            ],

            [
                'id' => 3,
                'pemilik' => 'Siti Aminah',
                'nomor_polisi' => 'R 9012 GHI',
                'merek' => 'Suzuki',
                'tipe' => 'Ertiga',
                'tahun' => '2020',
                'catatan' => '',
            ],
        ];

        session([
            'vehicles' => $vehicles
        ]);
    }

    return view('data-kendaraan.index', [
        'vehicles' => $vehicles
    ]);
});


// HALAMAN TAMBAH KENDARAAN
Route::get('/data-kendaraan/create', function () {

    return view('data-kendaraan.create');

});


// SIMPAN DATA KENDARAAN
Route::post('/data-kendaraan', function (Request $request) {

    // Ambil data kendaraan yang sudah ada
    $vehicles = session('vehicles', []);

    // Buat data kendaraan baru
    $newVehicle = [
        'id' => count($vehicles) + 1,

        'pemilik' => $request->input('pemilik'),

        'nomor_polisi' => $request->input('nomor_polisi'),

        'merek' => $request->input('merek'),

        'tipe' => $request->input('tipe'),

        'tahun' => $request->input('tahun'),

        'catatan' => $request->input('catatan'),
    ];

    // Tambahkan data baru
    $vehicles[] = $newVehicle;

    // Simpan kembali ke session
    session([
        'vehicles' => $vehicles
    ]);

    // Kembali ke halaman Data Kendaraan
    return redirect('/data-kendaraan')
        ->with('success', 'Data kendaraan berhasil ditambahkan.');
});

// =====================================================
// PENGGUNAAN BARANG
// =====================================================


// =====================================================
// INDEX - MENAMPILKAN DATA PENGGUNAAN BARANG
// =====================================================

Route::get('/penggunaan-barang', function () {

    $file = storage_path('app/penggunaan_barangs.json');

    // Kalau file belum ada, buat data kosong
    if (!file_exists($file)) {

        file_put_contents(
            $file,
            json_encode([], JSON_PRETTY_PRINT)
        );
    }

    // Baca data dari file JSON
    $json = file_get_contents($file);

    $penggunaanBarangs = json_decode($json, true);

    // Kalau data JSON bermasalah, gunakan array kosong
    if (!is_array($penggunaanBarangs)) {
        $penggunaanBarangs = [];
    }

    return view('penggunaan-barang.index', [
        'penggunaanBarangs' => $penggunaanBarangs,
    ]);
});


// =====================================================
// CREATE - FORM PENGGUNAAN BARANG
// =====================================================

Route::get('/penggunaan-barang/create', function () {

    // -------------------------------------------------
    // DATA SERVIS SEMENTARA
    // -------------------------------------------------

    $services = session()->get('services', []);

    if (empty($services)) {

        $services = [

            [
                'id' => 1,
                'pelanggan' => 'Budi Santoso',
                'kendaraan' => 'Toyota Avanza',
                'nomor_polisi' => 'B 1234 ABC',
                'layanan' => 'Service Berkala',
                'tanggal' => '2026-09-30',
                'status' => 'Dikerjakan',
            ],

            [
                'id' => 2,
                'pelanggan' => 'Andi Wijaya',
                'kendaraan' => 'Honda Brio',
                'nomor_polisi' => 'R 5678 DEF',
                'layanan' => 'Ganti Oli',
                'tanggal' => '2026-09-30',
                'status' => 'Selesai',
            ],

            [
                'id' => 3,
                'pelanggan' => 'Siti Aminah',
                'kendaraan' => 'Suzuki Ertiga',
                'nomor_polisi' => 'R 9012 GHI',
                'layanan' => 'Tune Up',
                'tanggal' => '2026-09-29',
                'status' => 'Menunggu',
            ],

        ];

        session()->put('services', $services);
    }


    // -------------------------------------------------
    // DATA BARANG SEMENTARA
    // -------------------------------------------------

    $barangs = session()->get('barangs', []);

    if (empty($barangs)) {

        $barangs = [

            [
                'id' => 1,
                'nama' => 'Oli Mesin',
            ],

            [
                'id' => 2,
                'nama' => 'Filter Oli',
            ],

            [
                'id' => 3,
                'nama' => 'Busi',
            ],

            [
                'id' => 4,
                'nama' => 'Kampas Rem',
            ],

            [
                'id' => 5,
                'nama' => 'Filter Udara',
            ],

            [
                'id' => 6,
                'nama' => 'Air Radiator',
            ],

        ];

        session()->put('barangs', $barangs);
    }


    return view('penggunaan-barang.create', [
        'services' => $services,
        'barangs' => $barangs,
    ]);
});


// =====================================================
// POST - SIMPAN PENGGUNAAN BARANG
// =====================================================

Route::post('/penggunaan-barang', function (Request $request) {

    // -------------------------------------------------
    // VALIDASI
    // -------------------------------------------------

    $validated = $request->validate([

        'service_id' => 'required',

        'barang' => 'required',

        'jumlah' => 'required|integer|min:1',

        'tanggal_penggunaan' => 'required|date',

        'catatan' => 'nullable|string',

    ]);


    // -------------------------------------------------
    // AMBIL DATA SERVIS
    // -------------------------------------------------

    $services = session()->get('services', []);

    if (empty($services)) {

        $services = [

            [
                'id' => 1,
                'pelanggan' => 'Budi Santoso',
                'kendaraan' => 'Toyota Avanza',
                'nomor_polisi' => 'B 1234 ABC',
                'layanan' => 'Service Berkala',
                'tanggal' => '2026-09-30',
                'status' => 'Dikerjakan',
            ],

            [
                'id' => 2,
                'pelanggan' => 'Andi Wijaya',
                'kendaraan' => 'Honda Brio',
                'nomor_polisi' => 'R 5678 DEF',
                'layanan' => 'Ganti Oli',
                'tanggal' => '2026-09-30',
                'status' => 'Selesai',
            ],

            [
                'id' => 3,
                'pelanggan' => 'Siti Aminah',
                'kendaraan' => 'Suzuki Ertiga',
                'nomor_polisi' => 'R 9012 GHI',
                'layanan' => 'Tune Up',
                'tanggal' => '2026-09-29',
                'status' => 'Menunggu',
            ],

        ];
    }


    // -------------------------------------------------
    // CARI SERVIS YANG DIPILIH
    // -------------------------------------------------

    $selectedService = collect($services)->first(
        function ($service) use ($validated) {

            return (int) ($service['id'] ?? 0)
                === (int) $validated['service_id'];
        }
    );


    // -------------------------------------------------
    // AMBIL DATA PELANGGAN / KENDARAAN
    // -------------------------------------------------

    $pelanggan =
        $selectedService['pelanggan']
        ?? '-';

    $kendaraan =
        $selectedService['kendaraan']
        ?? '-';

    $nomorPolisi =
        $selectedService['nomor_polisi']
        ?? '-';


    // -------------------------------------------------
    // FILE PENYIMPANAN
    // -------------------------------------------------

    $file = storage_path(
        'app/penggunaan_barangs.json'
    );


    // Kalau file belum ada
    if (!file_exists($file)) {

        file_put_contents(
            $file,
            json_encode([], JSON_PRETTY_PRINT)
        );
    }


    // -------------------------------------------------
    // BACA DATA LAMA
    // -------------------------------------------------

    $json = file_get_contents($file);

    $penggunaanBarangs = json_decode(
        $json,
        true
    );


    // Kalau kosong / rusak
    if (!is_array($penggunaanBarangs)) {

        $penggunaanBarangs = [];
    }


    // -------------------------------------------------
    // BUAT ID BARU
    // -------------------------------------------------

    if (empty($penggunaanBarangs)) {

        $nextId = 1;

    } else {

        $ids = array_column(
            $penggunaanBarangs,
            'id'
        );

        $nextId = max($ids) + 1;
    }


    // -------------------------------------------------
    // DATA BARU
    // -------------------------------------------------

    $dataBaru = [

        'id' => $nextId,

        'service_id' =>
            (int) $validated['service_id'],

        'tanggal_penggunaan' =>
            $validated['tanggal_penggunaan'],

        'pelanggan' =>
            $pelanggan,

        'kendaraan' =>
            $kendaraan,

        'nomor_polisi' =>
            $nomorPolisi,

        'barang' =>
            $validated['barang'],

        'jumlah' =>
            (int) $validated['jumlah'],

        'catatan' =>
            $validated['catatan'] ?? '',

    ];


    // -------------------------------------------------
    // TAMBAHKAN KE DATA LAMA
    // -------------------------------------------------

    $penggunaanBarangs[] = $dataBaru;


    // -------------------------------------------------
    // SIMPAN KE FILE JSON
    // -------------------------------------------------

    file_put_contents(
        $file,
        json_encode(
            $penggunaanBarangs,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        )
    );


    // -------------------------------------------------
    // REDIRECT
    // -------------------------------------------------

    return redirect('/penggunaan-barang')
        ->with(
            'success',
            'Data penggunaan barang berhasil ditambahkan.'
        );
});


Route::get('/stok-bengkel', function () {
    return view('stok-bengkel.index');
});

Route::get('/request-stok', function () {
    return view('request-stok.index');
});

Route::get('/riwayat-penggunaan', function () {
    return view('riwayat-penggunaan.index');
});

// admin gudang
Route::get('/dashboard/admin-gudang', function () {
    return view('dashboard.admin-gudang');
});

Route::get('/master-barang', function () {
    return view('master-barang.index');
});

Route::get('/master-barang/create', function () {
    return view('master-barang.create');
});

Route::get('/stok-gudang', function () {
    return view('stok-gudang.index');
});

Route::get('/barang-masuk', function () {
    return view('barang-masuk.index');
});

Route::get('/barang-masuk/create', function () {
    return view('barang-masuk.create');
});

Route::get('/req-stok-gudang', function () {
    return view('req-stok-gudang.index');
});

Route::get('/transfer-stok', function () {
    return view('transfer-stok.index');
});

Route::get('/transfer-stok/create', function () {
    return view('transfer-stok.create');
});

Route::get('/riwayat-stok', function () {
    return view('riwayat-stok.index');
});


// owner
Route::get('/dashboard/owner', function () {
    return view('dashboard.owner');
});

Route::get('/monitoring-stok', function () {
    return view('monitoring-stok.index');
});

Route::get('/monitoring-penggunaan', function () {
    return view('monitoring-penggunaan.index');
});

