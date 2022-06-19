<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    function index()
    {
        $pemesanan = Pemesanan::paginate(10);

        return view('pemesanan.index', ['pemesanan' => $pemesanan]);
    }

    function create()
    {
        return view('pemesanan.create');
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
        return view('pemesanan.edit', [
            'item' => $pemesanan
        ]);
    }

    function update(Request $request, Pemesanan $pemesanan)
    {
        $data = $request->all();
        $pemesanan->update($data);

        return redirect()->route('pemesanan.index');
    }

    function delete(Pemesanan $pemesanan)
    {
        $pemesanan->delete();

        return redirect()->route('pemesanan.index');
    }
}
