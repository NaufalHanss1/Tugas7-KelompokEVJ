<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\catagoryController;

class Catagory extends Model
{
    use HasFactory;

    protected $table = 'catagory';
    protected $fillable = ['nama_barang', 'foto_barang', 'harga'];


    public function tipeBarang()
    {
        return $this->belongsTo(tipeBarang::class);
    }
}
