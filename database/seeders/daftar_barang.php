<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('daftar_barang')->insert([
            ['nama_barang' => 'Claszian Apostasy', 'photo' => 'void.jpg'],
            ['nama_barang' => 'Demon Eater', 'photo' => 'sf.jpg'],
            ['nama_barang' => 'Fractal Horns of Inner Abysm', 'photo' => 'tb.jpg'],
            ['nama_barang' => 'Bladeform Legacy', 'photo' => 'jugger.jpg'],
            ['nama_barang' => 'Dread Retribution', 'photo' => 'drow.jpg'],
            ['nama_barang' => 'Phantom Advent', 'photo' => 'spectre.jpg'],
            ['nama_barang' => 'The One True King', 'photo' => 'wraithking.jpg'],
            ['nama_barang' => 'Feast of Abcession', 'photo' => 'pudge.jpg'],
        ]
        );
    }
}
