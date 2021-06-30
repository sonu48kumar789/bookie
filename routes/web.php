<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genres;
use Illuminate\Http\Request;
use App\Models\Book;

Route::get('/', function () {
    $data['genres'] = Genres::take(5)->offset(10)->get();

    return view('work.home',$data);
});

Route::prefix('genres')->group(function() {
  Route::get('/{id}',[GenresController::class,"index"])->name("genres.index"); 
});

Route::get('book/{book}', function (book $book) {
    $data['book'] = $book;
    return view('work.book',$data);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
