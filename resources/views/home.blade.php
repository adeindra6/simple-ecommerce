@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 600px;">
        <div class="container py-5">
        <h1 class="text-black fw-bold">
            Belanja Mudah, Hidup Lebih Praktis
        </h1>

        <p class="text-black">
            Temukan berbagai produk berkualitas dengan harga terbaik.
        </p>

        <a href="{{ route('product') }}" class="btn btn-outline-primary">
            Belanja Sekarang
        </a>
    </section>

    <!-- Featured Products -->
    <section class="py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-5">
                Produk Unggulan
            </h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/sepatu.png') }}"
                            class="card-img-top"
                            alt="Sepatu Casual"
                        >

                        <div class="card-body text-center">
                            <h5>Sepatu Casual</h5>
                            <p class="text-primary fw-bold">
                                Rp 299.000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/headphone.png') }}"
                            class="card-img-top"
                            alt="Wireless Headphone"
                        >

                        <div class="card-body text-center">
                            <h5>Wireless Headphone</h5>
                            <p class="text-primary fw-bold">
                                Rp 499.000
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/bag.png') }}"
                            class="card-img-top"
                            alt="Premium Bag"
                        >

                        <div class="card-body text-center">
                            <h5>Premium Bag</h5>
                            <p class="text-primary fw-bold">
                                Rp 399.000
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="bg-light py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-5">
                Kenapa Memilih Kami?
            </h2>

            <div class="row text-center">

                <div class="col-md-4">
                    <h1>⭐</h1>
                    <h5>Produk Berkualitas</h5>
                    <p>
                        Kami hanya menjual produk dengan kualitas terbaik.
                    </p>
                </div>

                <div class="col-md-4">
                    <h1>🚚</h1>
                    <h5>Pengiriman Cepat</h5>
                    <p>
                        Pengiriman ke seluruh Indonesia.
                    </p>
                </div>

                <div class="col-md-4">
                    <h1>🛡️</h1>
                    <h5>Belanja Aman</h5>
                    <p>
                        Transaksi aman dan terpercaya.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">

            <h2 class="fw-bold">
                Siap Berbelanja?
            </h2>

            <p class="lead">
                Temukan produk favorit Anda sekarang juga.
            </p>

            <a
                href="{{ route('product') }}"
                class="btn btn-light btn-lg"
            >
                Lihat Semua Produk
            </a>

        </div>
    </section>
@endsection

@push('scripts')
<script>
    window.addEventListener('load', function () {
        const modalElement = document.getElementById('welcomeModal');

        if (modalElement) {
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }

        welcomeModal.show();
    });
</script>
@endpush