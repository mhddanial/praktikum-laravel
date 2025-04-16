<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getData()
    {
        $data = [
            'jmlPesanan' => 86,
            'jmlPengguna' => 1025,
            'jmlKendaraan' => 500,
            'jmlMasukan' => 50,
            'menungguKonfirmasi' => 10,
            'menungguPembayaran' => 5,
            'belumDikembalikan' => 3,
        ];
        
        return $data;
    }
    
    public function index()
    {
        $data = $this->getData();
        return view('dashboard', compact('data'));
    }
}