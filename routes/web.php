<?php

use App\Http\Controller\MailController;
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
Route::match(['get', 'post'],'/tambah',[ MailController::class, "tambah" ]);
Route::get('/tambah', function () {
    return view('crudapp.tambah');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services-maintenance', function () {
    return view('services-maintenance');
});

Route::get('/services-service', function () {
    return view('services-service');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/rental', function () {
    return view('rental');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/UW-500', function () {
    return view('detail_UW-500');
});

Route::get('/USF-100', function () {
    return view('detail_USF-100');
});

Route::get('/USF-50', function () {
    return view('detail_USF-50');
});

Route::get('/USF-300', function () {
    return view('detail_USF-300');
});

Route::get('/GFB-800', function () {
    return view('detail_GFB-800');
});

Route::get('/GNH-700', function () {
    return view('detail_GNH-700');
});

Route::get('/GFS-100', function () {
    return view('detail_GFS-100');
});

Route::get('/WR-500', function () {
    return view('detail_WR-500');
});

Route::get('/DE-100', function () {
    return view('detail_DE-100');
});

Route::get('/RBG-100', function () {
    return view('detail_RBG-100');
});

Route::get('/CCR-10', function () {
    return view('detail_CCR-10');
});

Route::get('/CP-11', function () {
    return view('detail_CP-11');
});


Route::get('/UW-500-rent', function () {
    return view('rent_UW-500');
});

Route::get('/USF-100-rent', function () {
    return view('rent_USF-100');
});

Route::get('/USF-50-rent', function () {
    return view('rent_USF-50');
});

Route::get('/USF-300-rent', function () {
    return view('rent_USF-300');
});

Route::get('/GFB-800-rent', function () {
    return view('rent_GFB-800');
});

Route::get('/GNH-700-rent', function () {
    return view('rent_GNH-700');
});

Route::get('/GFS-100-rent', function () {
    return view('rent_GFS-100');
});

Route::get('/WR-500-rent', function () {
    return view('rent_WR-500');
});

Route::get('/DE-100-rent', function () {
    return view('rent_DE-100');
});

Route::get('/RBG-100-rent', function () {
    return view('rent_RBG-100');
});

Route::get('/CCR-10-rent', function () {
    return view('rent_CCR-10');
});

Route::get('/CP-11-rent', function () {
    return view('rent_CP-11');
});


