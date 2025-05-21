<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;


class ListProdukController extends Controller
{

    public function show()
    {
        $data = Produk::where('harga' ,'<', 3000000)
        ->orderBy('id')
        ->get();
        

        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }
        return view('list_produk', compact('nama', 'desc', 'harga'));
    }
}
