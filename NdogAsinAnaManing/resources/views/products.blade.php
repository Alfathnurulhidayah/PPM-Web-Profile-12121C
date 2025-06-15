@extends('layouts.app')

@section('title', 'Produk - N'dog Asin Organik Tegal Ana Maning')

@section('content')
<h2 class="mb-4" data-aos="fade-down">Produk Unggulan Kami</h2>

<div class="row g-4">
    @php
        $products = [
            ['name' => 'N'dog Asin Mentahan', 'desc' => 'Rasa asli dengan kualitas terbaik.', 'image' => 'images/telur-asin1.jpg'],
            ['name' => 'N'dog Asin Brungus', 'desc' => 'Varian pedas untuk pecinta rasa kuat.', 'image' => 'images/telur-asin-pedas.jpg'],
            ['name' => 'N'dog Asin Garang', 'desc' => 'Tekstur lembut dengan cita rasa khas.', 'image' => 'images/telur-asin-kuning.jpg'],
            ['name' => 'N'dog Asin Godog', 'desc' => 'Tekstur lembut dengan cita rasa khas.', 'image' => 'images/telur-asin-kuning.jpg'],
            ['name' => 'N'dog Asin Garang Wedi', 'desc' => 'Tekstur lembut dengan cita rasa khas.', 'image' => 'images/telur-asin-kuning.jpg'],
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
