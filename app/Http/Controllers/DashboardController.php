<?php

namespace App\Http\Controllers;

use App\Models\Jenis_cuci;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_jenis_cuci = Jenis_cuci::count();
        $jumlah_pelanggan = Pelanggan::count();
        $jumlah_pemesanan = Pemesanan::count();

        return view('dashboard', [
            'jumlah_jenis_cuci' => $jumlah_jenis_cuci,
            'jumlah_pelanggan' => $jumlah_pelanggan,
            'jumlah_pemesanan' => $jumlah_pemesanan,
        ]);
    }
}
