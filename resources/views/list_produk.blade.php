@extends('layouts.app')
@section('title', 'List Produk')
@section('page_title', 'List Produk')
@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $index + 1 }}
                </th>
                <td class="px-6 py-4">
                    {{ $item }}
                </td>
                <td class="px-6 py-4">
                    {{ $desc[$index] }}
                </td>
                <td class="px-6 py-4">
                    Rp {{ number_format($harga[$index], 0, ',', '.') }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-10">
    <h1 class="text-4xl font-black text-gray-900 text-center my-10">
        Tambah Produk
    </h1>
    <form method="POST" action="{{ route('produk.simpan') }}" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
            <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tambah nama produk" required />
        </div>
        <div class="mb-5">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tambah deskripsi produk..."></textarea>
        </div>
        <div class="mb-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Tambah Harga</label>
            <input type="number" name="harga" id="harga" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Harga dalam rupiah" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
    </form>
</div>
    
@endsection