<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\adminController;
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
Route::get('/logout', 'superAdminController@logout') ;
Route::get('/', 'homecontroller@index') ;
Route::get('/admin_login', 'adminController@index') ;
Route::get('/dashboard', 'adminController@show_dashboard') ;
Route::post('/adminDashboard', 'adminController@adminDashboardfunc') ;
Route::get('/AllCategory', 'AllCategoryController@index') ;
