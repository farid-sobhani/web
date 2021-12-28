<?php
use Farid\User\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Farid\User\Http\Controllers','middleware'=>'api'],function ($router){

    require __DIR__ . '/auth.php';
    $router->post('far','UserController@far');
//    $router->post('login',[AuthenticatedSessionController::class, 'store']) ->middleware('guest');
});
//Auth::routes(['verify'=>true]);
