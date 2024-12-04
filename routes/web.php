<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

// Halaman login tetap seperti semula
Route::get('/', function () {
    return view('auth.login');
});

// Setelah login, langsung diarahkan ke MessagesController
Route::get('/dashboard', )->middleware(['auth'])->name(config('chatify.routes.prefix'));


//route artisan call
Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    return 'success';
    return 'storage link succses';
});
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'config cache succses';
});
Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    return 'config clear succses';
});
Route::get('/view-cache', function() {
    Artisan::call('view:cache');
    return 'view cache succses';
});
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'view clear succses';
});
Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return 'route clear succses';
});



// Pastikan file auth.php tetap di-include
require __DIR__.'/auth.php';
