<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account-create',[
    FrontController::class,
    'accountCreation'
])->name('accountCreation');

Route::post('/save-account',[
    FrontController::class,
    'saveAccount'
])->name('saveAccount');

Route::get('/account/list',[
    FrontController::class,
    'acList'
])->name('acList');

Route::get('/account/view/{id}',[
    FrontController::class,
    'acView'
])->name('acView');

Route::get('/account/edit/{id}',[
    FrontController::class,
    'acEdit'
])->name('acEdit');

Route::get('/account/del/{id}',[
    FrontController::class,
    'acDelete'
])->name('acDelete');
