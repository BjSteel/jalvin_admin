<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', 'FrontendController@index')->name('view.home'); 
Route::get('/', 'FrontendController@about')->name('view.about'); 
Route::get('/', 'FrontendController@contact')->name('view.contact'); 
Route::get('/', 'FrontendController@search')->name('view.search'); 
Route::get('/', 'FrontendController@inquiry')->name('view.inquiry'); 


Route::match(['get', 'post'], '/admin/login', 'AuthController@login')->name('auth.login');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'BackendController@index')->name('view.dashboard');
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
    //Properties Controller
    Route::match(['get','post'], '/add-property', 'PropertiesController@add')->name('properties.add');
    Route::get('/list-property', 'PropertiesController@list')->name('properties.list');
    Route::get('/view-property/{id}', 'PropertiesController@view')->name('properties.view');
    Route::get('/delete-property/{id}', 'PropertiesController@delete')->name('properties.delete');
    Route::match(['get','post'],'/update-property/{id}', 'PropertiesController@view')->name('properties.update');
});