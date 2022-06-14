<?php
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('request.logs')->group(function () {
    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class, 'login']);
});
