<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
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

Route::get( '/', [BlogController::class, 'index'] );
Route::middleware( 'auth' )->group( function () {
	Route::get( '/blogs/create', [BlogController::class, 'create'] );
	Route::post( '/blogs/store', [BlogController::class, 'store'] );
	Route::get( md5( '/blogs/{blog:id}/edit' ), [BlogController::class, 'edit'] )->name( 'edit' );
	Route::patch( '/blogs/{blog:id}', [BlogController::class, 'update'] );
	Route::delete( '/blogs/{blog:id}', [BlogController::class, 'destroy'] );
} );

Route::middleware( 'guest' )->group( function () {
	Route::get( '/register', [RegistrationController::class, 'create'] );
	Route::post( '/register', [RegistrationController::class, 'store'] );
} );

Route::middleware( 'guest' )->group( function () {
	Route::get( '/login', [SessionController::class, 'create'] );
	Route::post( '/login', [SessionController::class, 'store'] );
} );
Route::post( '/logout', [SessionController::class, 'destroy'] )->middleware( 'auth' );