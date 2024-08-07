<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;

// Route::get('/', function () {
//     $name = 'Lokraj Thapa';
//     $address = 'Birauta-17';

//     return view('Portfolio.Home', ['name' => $name, 'address' => $address]);
// });

Route::get('/about', function () {
    $githublink = 'https://github.com/lokrajthapa';
    return view('Portfolio.About', ['link' => $githublink]);
})->name('about');

Route::get('/contact', function () {

    return view('Portfolio.Contact');
});
//wildcard route
Route::get('some/route/{whatever}',function(){

})->where('whatever','.+');

//movie list



Route::get('/', [MovieController::class, 'index']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
Route::post('/movies/{id}/update', [MovieController::class, 'update']);
Route::post('/movies/{id}/delete', [MovieController::class, 'destroy']);




