<?php
use Illuminate\Support\Facades\Route;
use Farid\RolePermission\Http\Controllers\RolePermissionsController;
Route::group(["namespace"=>"Farid\RolePermission\Http\Controllers",
    'middleware'=>['auth:api']],function ($router){
    //for update/create/delete a category
        $router->resource('permissions','RolePermissionsController');
//      ->middleware('permissions:manage role_permissions');
    //role routes
    $router->post('permissions/role/create',[RolePermissionsController::class,'createRole']);
    $router->post('permissions/role/delete',[RolePermissionsController::class,'deleteRole']);
    $router->post('permissions/role/user/give',[RolePermissionsController::class,'giveRoleToUser']);
    $router->post('permissions/role/user/delete',[RolePermissionsController::class,'deleteUserRole']);
   //permission routes
    $router->post('permissions/permission/create',[RolePermissionsController::class,'createPermission']);
    $router->post('permissions/permission/delete',[RolePermissionsController::class,'deletePermission']);
    $router->post('permissions/permission/user/give',[RolePermissionsController::class,'givePermissionToUser']);
    $router->post('permissions/permission/user/delete',[RolePermissionsController::class,'deleteUserPermission']);
//    $router->post('categories/delete','CategoryController@destroy');

});
