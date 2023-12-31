<?php

use App\Http\Controllers\ItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('EntryPoint', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/collection', function (){
    return Inertia::render('Perfume/Collection');
});
Route::get('/about', function (){
    return Inertia::render('About');
});
Route::get('/contact', function (){
    return Inertia::render('Contact');
});
Route::get('/item', function (){
    return Inertia::render('Perfume/SingleItem');
});
Route::get('/confirm-order', function (){
    return Inertia::render('OrderConfirm');
});
Route::get('/ordered', function (){
    return Inertia::render('Ordered');
});
Route::get('/type-collection', function (){
    return Inertia::render('Perfume/TypeCollection');
});
Route::get('/data', function (){
    return Inertia::render('Data');
});

Route::resource('items', ItemController::class)->only(['show']);
