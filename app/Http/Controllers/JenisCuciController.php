<?php

namespace App\Http\Controllers;

use App\Models\Jenis_cuci;
use Illuminate\Http\Request;

class JenisCuciController extends Controller
{
    function index()
    {
        $jenis_cuci = Jenis_cuci::paginate(10);

        return view('dashboard.jenis_cuci.index', ['jenis_cuci' => $jenis_cuci]);
    }

    function create()
    {
        return view('dashboard.jenis_cuci.create');
    }

    function store(Request $request)
    {
        Jenis_cuci::create([
            'id' => $request->id,
            'nama_jenis_cuci' => $request->nama_jenis_cuci,
        ]);

        return redirect()->route('jenis-cuci.index');
    }

    function edit(Jenis_cuci $jenis_cuci)
    {
        return view('dashboard.jenis_cuci.edit', [
            'item' => $jenis_cuci
        ]);
    }

    function update(Request $request, Jenis_cuci $jenis_cuci)
    {
        $data = $request->all();
        $jenis_cuci->update($data);

        return redirect()->route('jenis-cuci.index');
    }

    function destroy(Jenis_cuci $jenis_cuci)
    {
        $jenis_cuci->delete();

        return redirect()->route('jenis-cuci.index');
    }
}
