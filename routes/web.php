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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', ['uses'=>'FirstController@index'])->name('first_page');
/*Route::get('/calculator-lazernoy-rezki', function () {
    return view('calculator');
});*/
Route::get('/calculator-lazernoy-rezki', ['uses'=>'CalculatorController@index'])->name('calculator');
Route::get('/contact', ['uses'=>'ContactController@index'])->name('contact');

/*Route::get('/password/reset/', ['uses'=>'ResetPasswordController@showResetForm'])->name('password.reset');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin routes
	Route::group(['as' => 'admin.','middleware' => 'admin'], function() {
		Route::match(['get'],'/admin_calculator', ['uses'=>'Admin_calculatorController@index'])->name('admin_calculator');
		
        Route::match(['post'],'/admin_calculator', ['as' => 'update','uses'=>'Admin_calculatorController@update']);;
        
	});
