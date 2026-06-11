@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 600px;">
        <div class="container py-5">
        <h1 class="text-white fw-bold">
            Pawon Paramarta Catering
        </h1>

        <p class="text-white">
            Catering enak dengan harga terbaik.
        </p>

        <a href="{{ route('product') }}" class="btn btn-secondary">
            Pesan Sekarang
        </a>
    </section>

    <!-- Featured Products -->
    <section class="py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-5">
                Menu Unggulan
            </h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/paket-nasi-ayam.jpeg') }}"
                            class="card-img-top"
                            alt="Paket Nasi Ayam"
                        >

                        <div class="card-body text-center">
                            <h5>Paket Nasi Ayam</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(20000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/paket-nasi-uduk.jpeg') }}"
                            class="card-img-top"
                            alt="Paket Nasi Uduk"
                        >

                        <div class="card-body text-center">
                            <h5>Paket Nasi Uduk</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(20000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/paket-nasi-kuning.jpeg') }}"
                            class="card-img-top"
                            alt="Paket Nasi Kuning"
                        >

                        <div class="card-body text-center">
                            <h5>Paket Nasi Kuning</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(17000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/paket-nasi-telur.jpeg') }}"
                            class="card-img-top"
                            alt="Paket Nasi Telur"
                        >

                        <div class="card-body text-center">
                            <h5>Paket Nasi Telur</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(15000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-komplit.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Komplit"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Komplit</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(18000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-nusantara.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Nusantara"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Nusantara</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(12000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-paramata-special.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Paramata Special"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Paramata Special</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(20000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-premium.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Premium"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Premium</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(12000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-reguler.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Reguler"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Reguler</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(10000, 0, ',', '.') }}/box
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img
                            src="{{ asset('images/snackbox-tradisional.jpeg') }}"
                            class="card-img-top"
                            alt="Snackbox Tradisional"
                        >

                        <div class="card-body text-center">
                            <h5>Snack Box Tradisional</h5>

                            <h4 class="text-black">
                                Rp {{ number_format(12000, 0, ',', '.') }}/box
                            </h4>
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
                    <h5>Masakan Enak</h5>
                    <p>
                        Kami hanya menjual masakan dengan kualitas terbaik.
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
                    <h5>Pemesanan Aman</h5>
                    <p>
                        Pemesanan aman dan terpercaya.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 text-dark"
        style="background-color: #D2B48C;">
        <div class="container text-center">

            <h2 class="fw-bold">
                Siap Melakukan Pemesanan
            </h2>

            <p class="lead">
                Temukan menu favorit Anda sekarang juga.
            </p>

            <a
                href="{{ route('product') }}"
                class="btn btn-light btn-lg"
            >
                Lihat Semua Menu
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