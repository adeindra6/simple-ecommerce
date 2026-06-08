@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 600px;">
        <div class="container py-5">
            <div class="row align-items-center" style="min-height: 350px;">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">
                        Tentang Simple Ecommerce
                    </h1>

                    <p class="lead text-white mt-3">
                        Platform belanja online terpercaya yang menyediakan
                        berbagai produk berkualitas dengan harga terbaik untuk
                        memenuhi kebutuhan Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Company -->
    <section class="py-5">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">
                        Siapa Kami?
                    </h2>

                    <p class="text-muted">
                        Simple Ecommerce adalah platform belanja online yang
                        berkomitmen memberikan pengalaman berbelanja yang mudah,
                        aman, dan nyaman bagi seluruh pelanggan.
                    </p>

                    <p class="text-muted">
                        Kami menyediakan berbagai kategori produk mulai dari
                        fashion, elektronik, aksesoris, hingga kebutuhan
                        sehari-hari dengan kualitas terbaik dan harga
                        kompetitif.
                    </p>
                </div>

                <div class="col-lg-6">
                    <img
                        src="{{ asset('images/about-us.png') }}"
                        class="img-fluid rounded shadow"
                        style="height: 50px; width: 50px;"
                        alt="About Us"
                    >
                </div>

            </div>

        </div>
    </section>

    <!-- Vision Mission -->
    <section class="bg-light py-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">

                            <h3 class="text-primary fw-bold">
                                Visi
                            </h3>

                            <p>
                                Menjadi platform ecommerce terpercaya yang
                                memberikan kemudahan berbelanja bagi seluruh
                                masyarakat Indonesia.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">

                            <h3 class="text-primary fw-bold">
                                Misi
                            </h3>

                            <ul>
                                <li>Menyediakan produk berkualitas.</li>
                                <li>Memberikan pelayanan terbaik.</li>
                                <li>Mengutamakan kepuasan pelanggan.</li>
                                <li>Membangun kepercayaan jangka panjang.</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Kenapa Memilih Kami?
                </h2>
            </div>

            <div class="row text-center">

                <div class="col-md-4">
                    <div class="p-4">
                        <h3>⭐</h3>
                        <h5>Produk Berkualitas</h5>
                        <p class="text-muted">
                            Semua produk telah melalui proses seleksi kualitas.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4">
                        <h3>🚚</h3>
                        <h5>Pengiriman Cepat</h5>
                        <p class="text-muted">
                            Pengiriman ke seluruh Indonesia dengan partner terpercaya.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4">
                        <h3>🛡️</h3>
                        <h5>Belanja Aman</h5>
                        <p class="text-muted">
                            Transaksi aman dan data pelanggan terlindungi.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection