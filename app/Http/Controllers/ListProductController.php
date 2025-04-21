<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function getData()
    {
        // Kirim Data
        $data = [
            ['id' => 1, 'produk' => 'Beras Horas'],
            ['id' => 2, 'produk' => 'Tepung Terigu'],
            ['id' => 3, 'produk' => 'Minyak Goreng'],
            ['id' => 4, 'produk' => 'Telor Ayam'],
            ['id' => 5, 'produk' => 'Penyedap Royco'],
        ];
        
        return $data;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
