<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getData()
    {
        $data = [
            'jml_pesanan' => 86,
            'jml_pengguna' => 1025,
            'jml_kendaraan' => 500,
            'menunggu_konfirmasi' => 10,
            'menunggu_pembayaran' => 5,
            'belum_dikembalikan' => 3,
        ];
        
        return $data;
    }
    
    public function index()
    {
        $data = $this->getData();
        return view('dashboard', compact('data'));
    }
}