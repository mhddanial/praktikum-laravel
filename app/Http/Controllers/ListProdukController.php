<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $data = Produk::orderBy('id', 'desc')->get();
        
        // Initialize arrays to avoid undefined variable errors
        $nama = [];
        $desc = [];
        $harga = [];
        $id = [];
        
        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
            $id[] = $produk->id;
        }
        
        return view('list_produk', compact('nama', 'desc', 'harga', 'id'));
    }

    public function save(Request $request)
    {
        // Add validation
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0'
        ]);

        $produk = new Produk();
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        // Tambah Validasi
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0'
        ]);

        $produk = Produk::find($id);
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }
        
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function delete($id) 
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan atau gagal dihapus');
        }
    }

    // New method to get single product data for edit modal
    public function edit($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return response()->json([
                'success' => true,
                'data' => $produk
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Produk tidak ditemukan'
        ]);
    }
}