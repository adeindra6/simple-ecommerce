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
            <h1 class="text-white fw-bold">
                Belanja Mudah, Hidup Lebih Praktis
            </h1>

            <p class="text-white">
                Temukan berbagai produk berkualitas dengan harga terbaik.
            </p>

            <a href="{{ route('product') }}" class="btn btn-light">
                Belanja Sekarang
            </a>
        </div>
    </section>
@endsection