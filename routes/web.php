<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Events\Message;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/search', 'App\Http\Controllers\HomeController@search')->name('search');


Route::get('/services', function () {
    return view('services');
});

Route::get('/aa', function() {
    return 'ovo su produkti burazz';
});


Route::post('/send-message', function (Request $request) {
    event(
        new Message(
            $request->input('username'),
            $request->input('message')
        )
    );
    return ["success" => true];
});

Route::get('/products/food', [ProductsController::class, 'food'])->name('products.food');
Route::get('/products/toys', [ProductsController::class, 'toys'])->name('products.toys');
Route::get('/products/other', [ProductsController::class, 'other'])->name('products.other');

Route::get('/services/vets', [ServicesController::class, 'vets'])->name('services.vets');
Route::get('/services/groomers', [ServicesController::class, 'groomers'])->name('services.groomers');
Route::get('/services/walkers', [ServicesController::class, 'walkers'])->name('services.walkers');
Route::get('/services/educators', [ServicesController::class, 'educators'])->name('services.educators');
Route::get('/services/welfare', [ServicesController::class, 'welfare'])->name('services.welfare');
Route::get('/services/breeders', [ServicesController::class, 'breeders'])->name('services.breeders');

