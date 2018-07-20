<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function(){
    

    Route::resource('/admin/users', 'UsersController');

    Route::resource('/admin/site', 'SitesController');
    
    Route::resource('/admin/vendors', 'VendorsController');
    
    Route::resource('/admin/categories', 'CategoriesController');
    
    Route::resource('/admin/subcategories', 'SubcategoriesController');
    
    
    
});
Route::group(['middleware'=>'auth'], function(){
    
    Route::resource('/app/locations', 'LocationsController');

    Route::resource('/app/owners', 'OwnersController');
    
    Route::get('/app/documents/receive', 'DocumentsController@receive')->name('documents.receive');
    Route::get('/app/documents/handover', 'DocumentsController@handover')->name('documents.handover');
    Route::get('/app/documents/send', 'DocumentsController@send')->name('documents.send');
    Route::get('/app/documents/{id}/return', ['uses' => 'DocumentsController@returnprotocol', 'as'=>'documents.return']);
    Route::resource('/app/documents', 'DocumentsController');
    
    Route::resource('/app/assets', 'AssetsController');
});