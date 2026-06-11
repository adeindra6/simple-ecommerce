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
            'price' => 20000,
            'image' => 'paket-nasi-ayam.jpeg'
        ],
        [
            'name' => 'Paket Nasi Uduk',
            'price' => 20000,
            'image' => 'paket-nasi-uduk.jpeg'
        ],
        [
            'name' => 'Paket Nasi Kuning',
            'price' => 17000,
            'image' => 'paket-nasi-kuning.jpeg'
        ],
        [
            'name' => 'Paket Nasi Telur',
            'price' => 15000,
            'image' => 'paket-nasi-telur.jpeg'
        ],
        [
            'name' => 'Snack Box Komplit',
            'price' => 18000,
            'image' => 'snackbox-komplit.jpeg'
        ],
        [
            'name' => 'Snack Box Nusantara',
            'price' => 12000,
            'image' => 'snackbox-nusantara.jpeg'
        ],
        [
            'name' => 'Snack Box Paramata Special',
            'price' => 20000,
            'image' => 'snackbox-paramata-special.jpeg'
        ],
        [
            'name' => 'Snack Box Premium',
            'price' => 12000,
            'image' => 'snackbox-premium.jpeg'
        ],
        [
            'name' => 'Snack Box Reguler',
            'price' => 10000,
            'image' => 'snackbox-reguler.jpeg'
        ],
        [
            'name' => 'Snack Box Tradisional',
            'price' => 12000,
            'image' => 'snackbox-tradisional.jpeg'
        ],
    ];

    return view('product', compact('products'));
})->name('product');
