<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class TrackYourShoesController extends Controller
{
    public function client(Request $request)
    {
        $id = $request->id;

        $pemesanan = Pemesanan::where('id', '=', $id)
            ->first();

        return $pemesanan->toJson();
    }
}
