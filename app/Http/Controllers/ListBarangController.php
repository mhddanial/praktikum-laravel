<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    // function tampilkan($id, $nama) {
    //     return view('list_barang', ['id' => $id, 'nama' => $nama]);
    // }

    public function getData()
    {
        // Logika untuk mendapatkan array data
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Horas', 'harga' => 14000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 8000],
            ['id' => 3, 'nama' => 'Minyak Goreng', 'harga' => 16000],
            ['id' => 4, 'nama' => 'Telor Ayam', 'harga' => 3000],
            ['id' => 5, 'nama' => 'Penyedap Royco', 'harga' => 6000],
        ];
        
        return $dataBarang;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}