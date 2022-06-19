<?php

namespace App\Http\Controllers;

use App\Models\Jenis_cuci;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    function index()
    {
        $pemesanan = Pemesanan::select('pemesanan.*', 'pelanggan.nama_pelanggan', 'jenis_cuci.nama_jenis_cuci')
            ->join('pelanggan', 'pemesanan.pelanggan_id', '=', 'pelanggan.id')
            ->join('jenis_cuci', 'pemesanan.jenis_cuci_id', '=', 'jenis_cuci.id')
            ->paginate(10);

        return view('dashboard.pemesanan.index', ['pemesanan' => $pemesanan]);
    }

    function create()
    {
        $pelanggan = Pelanggan::all();
        $jenis_cuci = Jenis_cuci::all();

        return view('dashboard.pemesanan.create', [
            'pelanggan' => $pelanggan,
            'jenis_cuci' => $jenis_cuci,
        ]);
    }

    function store(Request $request)
    {
        Pemesanan::create([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'pelanggan_id' => $request->pelanggan_id,
            'jenis_cuci_id' => $request->jenis_cuci_id,
            'status' => $request->status,
        ]);

        return redirect()->route('pemesanan.index');
    }

    function edit(Pemesanan $pemesanan)
    {
        $pelanggan = Pelanggan::all();
        $jenis_cuci = Jenis_cuci::all();

        return view('dashboard.pemesanan.edit', [
            'item' => $pemesanan,
            'pelanggan' => $pelanggan,
            'jenis_cuci' => $jenis_cuci,
        ]);
    }

    function update(Request $request, Pemesanan $pemesanan)
    {
        $data = $request->all();
        $pemesanan->update($data);

        return redirect()->route('pemesanan.index');
    }

    function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();

        return redirect()->route('pemesanan.index');
    }
}
