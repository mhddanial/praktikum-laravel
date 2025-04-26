@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat Datang di Berita Batam')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    <div class="flex flex-wrap justify-center items-center gap-4">
        @for($i = 0; $i < 3; $i++)
            @include('components.card', [
                'imgsrc' => 'images/gonggong.jpg',
                'title' => 'Gonggong Goreng Tepung mak Limah',
                'desc' => 'Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi.'
            ])
        @endfor
    </div>
@endsection
