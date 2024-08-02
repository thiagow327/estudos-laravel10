<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// get view in folder
// Route::get('/contact', function(){
//     return view('site/contact');
// });

// get view in controller
Route::get('/contact', [SiteController::class, 'contact']);

// use name for reference
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
