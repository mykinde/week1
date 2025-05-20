<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Route::get('/', [WelcomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});




Route::get('/user/{id}', function ($id) {
    return "User ID is $id";
});

/* Route::get('/post/{slug?}', function ($slug = 'default-post') {
    return "Post slug: $slug";
});

Route::get('/contact', function () {
  
      return "<center> <h1>Contact Page</h1></center>";
    
})->name('contact');

// $url = route('contact'); // Generates URL for contact route
 */


//  use App\Http\Controllers\PageController;

// Route::get('/about', [PageController::class, 'about']);
// Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//  use App\Http\Controllers\SiteController;
// Route::get('/home', [SiteController::class, 'home']);
// Route::get('/services', [SiteController::class, 'services']);