<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-people/carol-chepkoech', function () {
    return view('carol-chepkoech');
});

Route::get('/our-people/mercy-mutai', function () {
    return view('mercy-mutai');
});

Route::get('/area-of-expertise', function () {
    return view('area-of-expertise');
});

Route::get('/area-of-expertise/commercial-and-corporate-law', function () {
    return view('commercial-and-corporate-law');
});

Route::get('/area-of-expertise/conveyancing-and-banking-and-finance', function () {
    return view('conveyancing-and-banking-and-finance');
});

Route::get('/area-of-expertise/litigation-and-dispute-resolution', function () {
    return view('litigation-and-dispute-resolution');
});

Route::get('/area-of-expertise/tax-law', function () {
    return view('tax-law');
});

Route::get('/area-of-expertise/technology-law-and-intellectual-property', function () {
    return view('technology-law-and-intellectual-property');
});
