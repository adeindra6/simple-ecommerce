@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 600px;">
            <div class="container py-5">
                <h1 class="text-white fw-bold">
                    Lihat Produk kami
                </h1>

                <p class="text-white lead">
                    Temukan berbagai produk berkualitas dengan harga terbaik.
                </p>
            </div>
    </section>

    <section>
        <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm mt-10">

                    <img
                        src="{{ asset('images/' . $product['image']) }}"
                        class="card-img-top"
                        alt="{{ $product['name'] }}"
                    >

                    <div class="card-body">
                        <h5>{{ $product['name'] }}</h5>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <a
                            href="https://wa.me/6289668594838?text={{ urlencode(
                                'Halo, saya tertarik memesan:' . "\n\n" .
                                'Menu: ' . $product['name']
                            ) }}"
                            target="_blank"
                            class="btn btn-primary w-100">
                            Pesan Sekarang
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    </section>
@endsection