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

Route::get('/area-of-expertise/{slug}', function ($slug) {
    $Service = DB::table('services')->where('slug',$slug)->get();
    // Example: return view('area-of-expertise.show', compact('slug'));
    return view('area-of-expertise', compact('Service'));
});

// Blog routes
Route::get('/articles', function () {
    return view('blog.index');
});

Route::get('/articles/{slug}', function ($slug) {
    $Blog = DB::table('articles')->where('slug',$slug)->get();
    // Example: return view('area-of-expertise.show', compact('slug'));
    return view('blog.index', compact('Blog'));
});
// Blog routes
// Route::get('/articles/{slung}', function () {
//     return view('blog.index');
// });