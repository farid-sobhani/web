<?php
Route::group(["namespace"=>"Farid\Category\Http\Controllers",'middleware'=>['api']],function ($router){
    //for update/create/delete a category
   $router->resource('categories','CategoryController')->middleware('auth:api');
  $router->post('categories/update','CategoryController@update');
  $router->post('categories/delete','CategoryController@destroy');

});
