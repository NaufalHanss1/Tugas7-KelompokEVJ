<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\tipeBarang;

class catagoryController extends Controller
{
    function index(){
        //return view('Catagory');

        $barang = Catagory::all();
        $barang1 = tipeBarang::all();

        
        return view('Catagory', compact('barang', 'barang1'));
    }

    // function catagori(){
    //     //return view('Catagory');

    //     $barang1 = tipeBarang::all();
    //     return view('Catagory', compact('barang1'));
    // }
}
