<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConvertController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('Convert.Data-convert');
    return redirect()->route('home');
});

Route::get('/home',[ConvertController::class,'index'])->name('home');

// create store
Route::get('/create',[ConvertController::class,'tambah'])->name('create');
Route::post('/simpan',[ConvertController::class,'store'])->name('simpan');

// edit
Route::get('/edit/{id}',[ConvertController::class,'edit'])->name('edit');
Route::post('/update/{id}',[ConvertController::class,'update'])->name('update');

// delete
Route::get('/delete/{id}',[ConvertController::class,'destroy'])->name('delete');

// konversi
Route::get('/konversi/{id}',[ConvertController::class,'konversi'])->name('konversi');
Route::post('/updkonversi/{id}',[ConvertController::class,'updkonversi'])->name('updkonversi');


