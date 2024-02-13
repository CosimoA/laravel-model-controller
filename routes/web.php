<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

// Route::get('/', function () {
//     return view('pages.home');
// })->name('Homepage');

Route::get('/', [PageController :: class, 'home']);