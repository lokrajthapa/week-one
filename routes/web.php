<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    $name = 'Lokraj Thapa';
    $address = 'Birauta-17';
    return view('Portfolio.Home', ['name' => $name, 'address' => $address]);
});

Route::get('/about', function () {
    $githublink = 'https://github.com/lokrajthapa';
    return view('Portfolio.About', ['link' => $githublink]);
});

Route::get('/contact', function () {

    return view('Portfolio.Contact');
});


// Route::get('/',[HomeController::class,'index']);
// Route::get('/about',[HomeController::class,'about']);


// Route::get('/test', function(){
//   return "Testing";
// });
//composer create-project laravel/laravel  FireFly


//vite for

//herd link


// Route::get('/about',function(){
//     return view('About');
// });
