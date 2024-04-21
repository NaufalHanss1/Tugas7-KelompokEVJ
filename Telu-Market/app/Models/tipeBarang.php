<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\tipebarangController;

class tipeBarang extends Model
{
    use HasFactory;
    protected $table = 'catagory_barang';
    protected $fillable = ['nama_barang', 'foto_barang'];

    public function Catagory()
    {
        return $this->hasMany(Catagory::class);
    }
}
