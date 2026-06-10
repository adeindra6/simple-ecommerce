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
            'image' => 'paket-nasi-ayam.jpeg'
        ],
        [
            'name' => 'Paket Nasi Uduk',
            'image' => 'paket-nasi-uduk.jpeg'
        ],
        [
            'name' => 'Paket Nasi Kuning',
            'image' => 'paket-nasi-kuning.jpeg'
        ],
        [
            'name' => 'Paket Nasi Telur',
            'image' => 'paket-nasi-telur.jpeg'
        ],
        [
            'name' => 'Snack Box Komplit',
            'image' => 'snackbox-komplit.jpeg'
        ],
        [
            'name' => 'Snack Box Nusantara',
            'image' => 'snackbox-nusantara.jpeg'
        ],
        [
            'name' => 'Snack Box Paramata Special',
            'image' => 'snackbox-paramata-special.jpeg'
        ],
        [
            'name' => 'Snack Box Premium',
            'image' => 'snackbox-premium.jpeg'
        ],
        [
            'name' => 'Snack Box Reguler',
            'image' => 'snackbox-reguler.jpeg'
        ],
        [
            'name' => 'Snack Box Tradisional',
            'image' => 'snackbox-tradisional.jpeg'
        ],
    ];

    return view('product', compact('products'));
})->name('product');
