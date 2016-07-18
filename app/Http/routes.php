<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UsersController@index');

Route::get('home', 'UsersController@index');



Route::get('login', 'UsersController@index');
Route::get('register', 'UsersController@register');
Route::post('post-register', 'UsersController@postRegister');
Route::post('post-login', 'UsersController@postLogin');
Route::get('logout', 'UsersController@logout');

// BACKEND
Route::get('admin', 'backend\AdminController@index');

// konsultasi
Route::get('admin/konsultasi', 'backend\AdminKonsultasiController@index');
Route::post('admin/konsultasi/submit', 'backend\AdminKonsultasiController@submit');
Route::post('admin/konsultasi/kesimpulan', 'backend\AdminKonsultasiController@kesimpulan');

// Daftar Ikan
Route::get('admin/ikan', 'backend\AdminIkanController@index');
Route::get('admin/ikan/create', 'backend\AdminIkanController@create');
Route::post('admin/ikan/store', 'backend\AdminIkanController@store');
Route::get('admin/ikan/edit/{id}', 'backend\AdminIkanController@edit');
Route::post('admin/ikan/update/{id}', 'backend\AdminIkanController@update');
Route::post('admin/ikan/delete/{id}', 'backend\AdminIkanController@delete');
Route::get('admin/ikan/show/{id}', 'backend\AdminIkanController@show');

// Daftar Pakan
Route::get('admin/pakan', 'backend\AdminPakanController@index');
Route::get('admin/pakan/create', 'backend\AdminPakanController@create');
Route::post('admin/pakan/store', 'backend\AdminPakanController@store');
Route::get('admin/pakan/edit/{id}', 'backend\AdminPakanController@edit');
Route::post('admin/pakan/update/{id}', 'backend\AdminPakanController@update');
Route::post('admin/pakan/delete/{id}', 'backend\AdminPakanController@delete');
Route::get('admin/pakan/show/{id}', 'backend\AdminPakanController@show');

// Daftar Rules
Route::get('admin/rules', 'backend\AdminRulesController@index');
Route::get('admin/rules/create', 'backend\AdminRulesController@create');
Route::post('admin/rules/store', 'backend\AdminRulesController@store');
Route::get('admin/rules/edit/{id}', 'backend\AdminRulesController@edit');
Route::post('admin/rules/update/{id}', 'backend\AdminRulesController@update');
Route::post('admin/rules/delete/{id}', 'backend\AdminRulesController@delete');
Route::get('admin/rules/show/{id}', 'backend\AdminPakanController@show');

// Daftar Rules Fish
Route::get('admin/rulesfish', 'backend\AdminRulesFishController@index');
Route::get('admin/rulesfish/create', 'backend\AdminRulesFishController@create');
Route::post('admin/rulesfish/store', 'backend\AdminRulesFishController@store');
Route::get('admin/rulesfish/edit/{id}', 'backend\AdminRulesFishController@edit');
Route::post('admin/rulesfish/update/{id}', 'backend\AdminRulesFishController@update');
Route::post('admin/rulesfish/delete/{id}', 'backend\AdminRulesFishController@delete');
Route::get('admin/rulesfish/show/{id}', 'backend\AdminRulesFishController@show');

// Daftar Pakan Komersil
Route::get('admin/pakankomersil', 'backend\AdminPakanKomersilController@index');
Route::get('admin/pakankomersil/create', 'backend\AdminPakanKomersilController@create');
Route::post('admin/pakankomersil/store', 'backend\AdminPakanKomersilController@store');
Route::get('admin/pakankomersil/edit/{id}', 'backend\AdminPakanKomersilController@edit');
Route::post('admin/pakankomersil/update/{id}', 'backend\AdminPakanKomersilController@update');
Route::post('admin/pakankomersil/delete/{id}', 'backend\AdminPakanKomersilController@delete');
Route::get('admin/pakankomersil/show/{id}', 'backend\AdminPakanKomersilController@show');