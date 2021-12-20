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

Route::get('/', 'HomeController@home')->name('homePage');

Auth::routes();

//staff routes
Route::get('/acp', 'HomeController@acp');

Route::get('/acp/family/create', 'FamilyController@create');
Route::post('/acp/family/insert', 'FamilyController@insert');
Route::get('/acp/families', 'FamilyController@listAdmin');
Route::post('/acp/family/update/{id}', 'FamilyController@update');
Route::delete('/acp/family/delete/{id}', 'FamilyController@delete');


Route::get('/acp/product/create', 'ProductController@create');
Route::post('/acp/product/insert', 'ProductController@insert');
Route::get('/acp/products', 'ProductController@list');
// Route::get('/admin/products', 'ProductController@admin_products')->name('admin_product');

Route::get('/acp/filament/create', 'FilamentController@create');
Route::post('/acp/filament/insert', 'FilamentController@insert');
Route::get('/acp/filaments', 'FilamentController@listAdmin');
Route::delete('/acp/filament/delete/{id}', 'FilamentController@delete');

//user routes
Route::get('/home', 'HomeController@index')->name('home');

