@extends('layouts.app')

@section('title', 'Tentang Kami - Ndog Asin Ana Maning')

@section('content')
<h2 class="mb-4" data-aos="fade-right" data-aos-delay="0">Tentang Ndog asin Ana Maning</h2>

<section data-aos="fade-right" data-aos-delay="400" class="mb-4">
    <h4>Sejarah Kami</h4>
    <p>Ndog Asin "Ana Maning" berdiri sejak tahun 2001, didirikan oleh Bapak Ahmad yang berpengalaman dalam memproduksi telur asin khas Brebes dengan resep turun-temurun. Kami berkomitmen menghadirkan produk berkualitas dan cita rasa autentik.</p>
</section>

<section data-aos="fade-right" data-aos-delay="800" class="mb-4">
    <h4>Visi & Misi</h4>
    <ul>
        <li>Menjadi produsen telur asin terbaik di Indonesia.</li>
        <li>Menyediakan produk berkualitas dengan harga terjangkau.</li>
        <li>Mendukung perekonomian lokal melalui distribusi luas.</li>
    </ul>
</section>

<section data-aos="fade-up" class="mb-4">
    <h4>Proses Produksi</h4>
    <p>Telur asin kami dibuat dengan proses alami dan higienis, menggunakan bahan berkualitas dan resep tradisional Brebes yang telah teruji selama puluhan tahun.</p>
    <img src="{{ asset('images/produksi-telur.jpg') }}" alt="Proses Produksi" class="img-fluid rounded shadow-sm">
</section>

<section data-aos="fade-up">
    <h4>Foto Kami</h4>
    <div class="row g-3">
        <div class="col-md-4">
            <img src="{{ asset('images/owner.jpg') }}" alt="Owner" class="img-fluid rounded shadow-sm">
            <p class="text-center mt-2">Bapak Ahmad, Owner</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/kios.jpg') }}" alt="Kios" class="img-fluid rounded shadow-sm">
            <p class="text-center mt-2">Kios Telur Asin Maknyus</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/distribusi.jpg') }}" alt="Distribusi" class="img-fluid rounded shadow-sm">
            <p class="text-center mt-2">Distribusi ke Berbagai Daerah</p>
        </div>
    </div>
</section>
@endsection