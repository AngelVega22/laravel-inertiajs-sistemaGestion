<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\ActivoController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/', function () {
//     return Inertia::render('Auth/Login', [
//         // 'canLogin' => Route::has('login'),
//         // 'canRegister' => Route::has('register'),
//         // 'laravelVersion' => Application::VERSION,
//         // 'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::resource('ubicaciones', UbicacionController::class) ->middleware(['auth:sanctum', 'verified']);

Route::resource('activos', ActivoController::class) -> middleware(['auth:sanctum' , 'verified']);


// Route::middleware(['auth:sanctum' ,'verified']) -> get('/Dashboard' ,function(){
//     return Inertia::render('Dashboard');
// });

// Route::middleware(['auth:sanctum' ,'verified']) -> get('register' ,function(){
//     return Inertia::render('Auth/Register');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
