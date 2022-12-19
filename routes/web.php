<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\TransactionController;



Route::get('/',[AuthController::class,'getLogin'])->name('login');
Route::post('/login',[AuthController::class,'postLogin']);
Route::get('/logout',[AuthController::class,'logout']);

    Route::group(['middleware' => 'auth','prefix'=>'transactions'], function () {

        Route::get('/',[TransactionController::class,'list']);
        Route::get('/add',[TransactionController::class,'getForm']);
        Route::post('/postAdd',[TransactionController::class,'postForm']);
        Route::post('/status/{id}',[TransactionController::class,'changeStatus'])->middleware('admin');


    });

