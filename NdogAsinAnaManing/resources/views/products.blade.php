@extends('layouts.app')

@section('title', 'Produk - Toko Telur Asin Maknyus')

@section('content')
<h2 class="mb-4" data-aos="fade-down">Produk Unggulan Kami</h2>

<div class="row g-4">
    @php
        $products = [
            ['name' => 'Telur Asin Original', 'desc' => 'Rasa asli dengan kualitas terbaik.', 'image' => 'images/telur-asin1.jpg'],
            ['name' => 'Telur Asin Pedas', 'desc' => 'Varian pedas untuk pecinta rasa kuat.', 'image' => 'images/telur-asin-pedas.jpg'],
            ['name' => 'Telur Asin Kuning', 'desc' => 'Tekstur lembut dengan cita rasa khas.', 'image' => 'images/telur-asin-kuning.jpg'],
        ];
    @endphp

    @foreach($products as $product)
    <div class="col-md-4" data-aos="zoom-in">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product['name'] }}</h5>
                <p class="card-text">{{ $product['desc'] }}</p>
                <a href="/contact" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection