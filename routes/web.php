<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/

Route::get(
    '/',
    [
        HomeController::class,
        'index'
    ]
)->name('home');


/*
|--------------------------------------------------------------------------
| Invitados
|--------------------------------------------------------------------------
*/

Route::middleware('guest')
    ->group(function () {

        Route::get(
            '/registro',
            [
                AuthController::class,
                'showRegister'
            ]
        )->name('register');


        Route::post(
            '/registro',
            [
                AuthController::class,
                'register'
            ]
        )->name('register.store');


        Route::get(
            '/login',
            [
                AuthController::class,
                'showLogin'
            ]
        )->name('login');


        Route::post(
            '/login',
            [
                AuthController::class,
                'login'
            ]
        )->name('login.store');

    });


/*
|--------------------------------------------------------------------------
| Usuarios autenticados
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->group(function () {

        Route::get(
            '/publicaciones/crear',
            [
                PostController::class,
                'create'
            ]
        )->name('posts.create');


        Route::post(
            '/publicaciones',
            [
                PostController::class,
                'store'
            ]
        )->name('posts.store');


        Route::post(
            '/logout',
            [
                AuthController::class,
                'logout'
            ]
        )->name('logout');

    });