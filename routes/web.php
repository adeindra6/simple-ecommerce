<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/product', function () {
    $products = [
        [
            'name' => 'Paket Nasi Ayam',
            'price' => 23000,
            'image' => 'paket-nasi-ayam.jpeg'
        ],
        [
            'name' => 'Paket Nasi Uduk',
            'price' => 23000,
            'image' => 'paket-nasi-uduk.jpeg'
        ],
        [
            'name' => 'Paket Nasi Kuning',
            'price' => 20000,
            'image' => 'paket-nasi-kuning.jpeg'
        ],
        [
            'name' => 'Paket Nasi Telur',
            'price' => 16000,
            'image' => 'paket-nasi-telur.jpeg'
        ],
        [
            'name' => 'Snack Box Komplit',
            'price' => 18500,
            'image' => 'snackbox-komplit.jpeg'
        ],
        [
            'name' => 'Snack Box Nusantara',
            'price' => 14500,
            'image' => 'snackbox-nusantara.jpeg'
        ],
        [
            'name' => 'Snack Box Paramata Special',
            'price' => 20000,
            'image' => 'snackbox-paramata-special.jpeg'
        ],
        [
            'name' => 'Snack Box Premium',
            'price' => 14500,
            'image' => 'snackbox-premium.jpeg'
        ],
        [
            'name' => 'Snack Box Reguler',
            'price' => 12500,
            'image' => 'snackbox-reguler.jpeg'
        ],
        [
            'name' => 'Snack Box Tradisional',
            'price' => 14500,
            'image' => 'snackbox-tradisional.jpeg'
        ],
    ];

    return view('product', compact('products'));
})->name('product');
