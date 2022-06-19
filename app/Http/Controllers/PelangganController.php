<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    function index()
    {
        $pelanggan = Pelanggan::paginate(10);

        return view('dashboard.pelanggan.index', ['pelanggan' => $pelanggan]);
    }

    function create()
    {
        return view('dashboard.pelanggan.create');
    }

    function store(Request $request)
    {
        Pelanggan::create([
            'id' => $request->id,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('pelanggan.index');
    }

    function edit(Pelanggan $pelanggan)
    {
        return view('dashboard.pelanggan.edit', [
            'item' => $pelanggan
        ]);
    }

    function update(Request $request, Pelanggan $pelanggan)
    {
        $data = $request->all();
        $pelanggan->update($data);

        return redirect()->route('pelanggan.index');
    }

    function delete(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return redirect()->route('pelanggan.index');
    }
}
