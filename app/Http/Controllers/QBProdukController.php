<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

use DB;

class QBProdukController extends Controller
{
    //eloquent
    public function show_eloquent() {
        $produk = kategori::all();
        return view('index', ['produk' => $produk]);
    }

    public function insert_eloquent() {
        kategori::create(['nama' => 'Kompor',
         'id_kategori' => 2,
          'qty' => '8',
           'harga_beli' => 100000,
            'harga_jual' => 75000]);
        //return view('produk', ['produk' => $produk]);
    }

    public function update_eloquent() {
        kategori::where('id',11)
        ->update(['harga_beli' => '80000',]);
    }

    public function index()
     {
        $produk = DB::table('produk')->get();
        return view('produk',['produk' => $produk]);
    }

    

  
}
