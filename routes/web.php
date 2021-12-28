<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
//   Spatie\Permission\Models\Permission::create(['name'=>'manage role_permissions']);
//   auth()->user()->givePermissionTo('manage role_permissions');
   return \auth()->logout();
});

Route::get('/dashboard', function () {
//   Spatie\Permission\Models\Permission::create(['name'=>'manage role_permissions']);
//   auth()->user()->givePermissionTo('manage role_permissions');
   return view('welcome');
});
Route::get('/h', function () {
//   Spatie\Permission\Models\Permission::create(['name'=>'manage role_permissions']);
//   auth()->user()->givePermissionTo('manage role_permissions');
    if (\auth()->user()){
        return "yes";
    }
   return "no";
});


Route::get('/', function () {
    return view('welcome');
});

//require __DIR__.'/auth.php';
//Auth::routes(['verify'=>true]);
