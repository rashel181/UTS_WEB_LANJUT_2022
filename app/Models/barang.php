<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'daftar_barang';
    protected $primarykey = 'id_barang';
    protected $fillable = ['nama_barang'];
}
