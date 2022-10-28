<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'review_barang';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_barang',
        'deskripsi_barang',
        'reviewer_name',
        'review'
    ];
}
