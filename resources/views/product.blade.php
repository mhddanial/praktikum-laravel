@extends('layout.list')

<div>
    @section('title', 'Product')
    @section('content')
        <div class="container m-10">
            @include('list_product')
        </div>
            
    @endsection
</div>