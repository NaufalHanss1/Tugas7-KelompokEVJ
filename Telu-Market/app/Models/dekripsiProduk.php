<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dekripsiProduk extends Model
{
    use HasFactory;
    protected $table = 'deskripsi_produk';
    protected $fillable = [
        'gambar',
        'nama_produk',
        'harga_produk',
        'deskripsi',
        'nama_toko',
        'rating'
    ];
}
