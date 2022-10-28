<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\barangController;
use Illuminate\Support\Facades\DB;
use App\Models\barang;
use App\Models\review;

class reviewController extends Controller
{
    //
    public function review($id_barang)
    {
        $data = DB::table('daftar_barang')
            ->join('review_barang', 'review_barang.id_barang', '=', 'daftar_barang.id_barang')
            ->where('daftar_barang.id_barang', $id_barang)
            ->get();

        return view('review', ["daftarbarang" => $data]);
    }
}
