<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'communities', 'as' => 'community.'], function () {
    Route::get('/', [CommunityController::class, 'index'])->name('index');
    Route::post('/', [CommunityController::class, 'store'])->name('store');
});
