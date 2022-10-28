<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\barang;

class barangController extends Controller
{
    //
    public function home(){
        $allBarang = barang::all();
        $data['allBarang'] = barang::all();
        
        return view('home', $data);
    }
}
