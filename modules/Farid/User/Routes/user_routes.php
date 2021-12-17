<?php
Route::group(['namespace'=>'Farid/User/Http/Controllers','middleware'=>'web'],function ($router){

    require __DIR__ . '/auth.php';

});
//Auth::routes(['verify'=>true]);
