@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <section
        style="background-image: url('{{ asset('images/homepage-background.png') }}');
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

                        <h4 class="text-primary">
                            Rp {{ number_format($product['price'], 0, ',', '.') }}
                        </h4>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <button class="btn btn-primary w-100">
                            Beli Sekarang
                        </button>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    </section>
@endsection