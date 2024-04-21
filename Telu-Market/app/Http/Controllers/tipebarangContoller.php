<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipeBarang;
use App\Models\Catagory;

class tipebarangController extends Controller
{
    function index($catagori_id) {
        $barang = Catagory::where('catagori_id', $catagori_id)->get();
        return view('tipeBarang', compact('barang'));
    }
    
    

    // function pensil(){
        
    // $barang1 = Catagory::where('catagori_id', 2)->get();
    // return view('pensil', compact('barang1'));
    // }
   
}
