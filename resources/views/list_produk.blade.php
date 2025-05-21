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
@endsection