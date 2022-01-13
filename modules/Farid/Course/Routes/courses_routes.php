<?php
use Illuminate\Support\Facades\Route;
use Farid\Course\Http\Controllers\CourseController;
//Route::group(["namespace"=>"Farid\Course\Http\Controllers",
//    'middleware'=>['auth:api']],function ($router){
//
//    $router->resource('courses','CourseController');
////      ->middleware('permissions:manage role_permissions');
//
//    $router->post('course/create',[CourseController::class,'create']);
//
//
//});
Route::post('course/create', 'Farid\Course\Http\Controllers\CourseController@create')->middleware('auth:api');
Route::get('courses', 'Farid\Course\Http\Controllers\CourseController@courses')->middleware('api');
