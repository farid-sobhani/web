<?php
use Farid\User\Http\Controllers\Auth\AuthenticatedSessionController;
use Farid\User\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Farid\User\Http\Controllers','middleware'=>'api'],function ($router){

    require __DIR__ . '/auth.php';
    $router->post('users/specific/roles',[UserController::class,'getSpecificRoles'])->middleware('auth');

//    $router->post('login',[AuthenticatedSessionController::class, 'store']) ->middleware('guest');
});
//Auth::routes(['verify'=>true]);
