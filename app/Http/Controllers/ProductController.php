<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ListProductController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // buat properti listProductController
    public $listProductController;

    // buat constructor untuk menginisialisasi listProductController
    public function __construct(ListProductController $listProductController)
    {
        $this->listProductController = $listProductController;
    }
    public function index()
    {
        // panggil method getData dari ListProductController
        $data = $this->listProductController->getData();
        // tampilkan view product dengan data yang didapat dari getData
        return view('product', compact('data'));
    }
} 