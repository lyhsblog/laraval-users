<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// APP Routes Below
Route::prefix("/user")->middleware(['web', 'auth', 'verified'])->group(function () {
    Route::get('/profile', function () {
        return \Illuminate\Support\Facades\Response::redirectToRoute('users.show', ['user' => \Illuminate\Support\Facades\Auth::id()]);
    })->name('user.profile');
});
