<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSearchHistoryController;



Route::get('/', [UserSearchHistoryController::class, 'index'])->name('index');
Route::post('filter', [UserSearchHistoryController::class, 'filter'])->name('filter');

