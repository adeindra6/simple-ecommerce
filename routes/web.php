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
            'name' => 'Sepatu Casual',
            'price' => 299000,
            'image' => 'sepatu.png'
        ],
        [
            'name' => 'Wireless Headphone',
            'price' => 499000,
            'image' => 'headphone.png'
        ],
        [
            'name' => 'Tas Premium',
            'price' => 399000,
            'image' => 'bag.png'
        ]
    ];

    return view('product', compact('products'));
})->name('product');
