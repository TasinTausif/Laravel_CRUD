<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [BlogController::class, 'index'] );
Route::middleware( 'auth' )->group( function () {
	Route::get( '/blogs/create', [BlogController::class, 'create'] );
	Route::post( '/blogs/store', [BlogController::class, 'store'] );
	Route::get( '/blogs/{blog:id}/edit', [BlogController::class, 'edit'] )->name( 'edit' );
	Route::patch( '/blogs/{blog:id}', [BlogController::class, 'update'] );
	Route::delete( '/blogs/{blog:id}', [BlogController::class, 'destroy'] );
} );

Route::middleware( 'guest' )->group( function () {
	Route::view( '/register', 'registration.create' );
	Route::post( '/register', RegistrationController::class );
} );

Route::middleware( 'guest' )->group( function () {
	Route::view( '/login', 'session.create' )->name( 'login' );
	Route::post( '/login', [SessionController::class, 'store'] );
} );
Route::post( '/logout', [SessionController::class, 'destroy'] )->middleware( 'auth' );