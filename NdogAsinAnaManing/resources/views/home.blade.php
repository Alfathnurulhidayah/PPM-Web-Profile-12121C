@extends('layouts.app')

@section('title', 'Beranda - ndog Asin Ana Maning')

@section('content')
    <!-- Hero Section -->
    <div class="hero d-flex flex-column flex-md-row align-items-center justify-content-center text-white" 
         data-aos="fade-up" 
         style="min-height: 60vh; 
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/banner-telur.png') }}'); 
                background-size: cover; 
                background-position: center;">
        <div class="text-center text-md-start flex-fill px-3 px-md-5">
            <h2 class="display-4 fw-bold">Ndog Asin Asli Tegal</h2>
            <p class="lead mb-4">Lezat & Bergizi, Langsung dari Produsen ke toko Terdekat</p>
            <a href="/products" class="btn btn-light btn-lg shadow-sm">Lihat Produk Kami</a>
        </div>
        <div class="flex-fill text-center px-3 px-md-5">
            <img src="{{ asset('images/banner-telur.png') }}" 
                 alt="Ndog Asin Ana Maning" 
                 class="img-fluid rounded shadow-lg" 
                 style="max-width: 350px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        </div>
    </div>

<!-- Tentang Singkat -->
<section class="my-5" data-aos="fade-right">
    <h3>Tentang Kami</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aut autem, repellat assumenda odio at aliquid numquam, dolores maxime recusandae illum aspernatur aliquam beatae porro aperiam mollitia veritatis. Sapiente, beatae?</p>
</section>

<!-- Produk Unggulan -->
<section class="my-5" data-aos="zoom-in">
    <h3>Produk Unggulan</h3>
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
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Distribusi -->
<section class="my-5" data-aos="fade-up">
    <h3>Distribusi Kami</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nihil incidunt autem quos, esse et harum sunt ratione impedit aliquid adipisci suscipit magni aut aspernatur doloremque molestias asperiores dolor delectus.</p>
</section>

<!-- Testimoni -->
<section class="my-5" data-aos="fade-up">
    <h3>Testimoni Pelanggan</h3>
    <blockquote class="blockquote">
        <p>"Telur asin Maknyus sangat lezat dan berkualitas, selalu jadi favorit keluarga kami!"</p>
        <footer class="blockquote-footer">Budi, Jakarta</footer>
    </blockquote>
    <blockquote class="blockquote">
        <p>"Pelayanan cepat dan produk selalu fresh, recommended banget."</p>
        <footer class="blockquote-footer">Sari, Semarang</footer>
    </blockquote>
</section>

<!-- Call to Action -->
<section class="text-center my-5" data-aos="zoom-in">
    <a href="/contact" class="btn btn-primary btn-lg shadow">Hubungi Kami untuk Pemesanan</a>
</section>
@endsection