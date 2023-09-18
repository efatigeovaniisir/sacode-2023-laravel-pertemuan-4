<?php

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

// Route Dasar

Route::get('/welcome',function (){
    return  "Selamat Datang";
});

Route::get('/beranda/news',function (){
    return  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque assumenda quam sint corporis placeat, quaerat ut eum in consectetur aut fugiat nemo exercitationem numquam! Dignissimos itaque ducimus earum cumque quae.";
});

// Route dengan View
Route::get('/berita', function (){
    return view('users.berita.index');
});

Route::get('/berita/detail', function (){
    return view('users.berita.show');
});

// Route dengan Prefix
Route::prefix('admin')->group(function (){

    // Dashboard
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });

    // News
    Route::get('/news', function (){
        return view('admin.news.index');
    });

    // News > create
    Route::get('/news/create', function (){
        return view('admin.news.create');
    });

    // News > edit
    Route::get('/news/edit', function (){
        return view('admin.news.edit');
    });

    // News > show
    Route::get('/news/show', function (){
        return view('admin.news.show');
    });

    // Reports
    Route::get('/reports', function (){
        return view('admin.reports.index');
    });
    
    // Settings
    Route::get('/settings', function (){
        return view('admin.settings.index');
    });

    // Users
    Route::get('/users', function (){
        return view('admin.users.index');
    });
});