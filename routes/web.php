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

Route::get('/login', [
    'uses' => 'Auth\LoginController@Login',
    'as' => 'login'
]);

Route::post('/postLogin', [
    'uses' => 'Auth\LoginController@postLogin',
    'as' => 'postLogin'
]);

Route::post('/logout', [
    'uses' => 'Auth\LoginController@Logout',
    'as' => 'logout'
]);

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('user')->group(function() {
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'user.home'
    ]);

    // --------Company Section--------
    Route::get('/companies', [
        'uses' => 'CompanyController@showCompany',
        'as' => 'user.companies'
    ]);
    Route::get('/addCompany', [
        'uses' => 'CompanyController@addCompany',
        'as' => 'user.addCompany'
    ]);
    Route::post('/postAddCompany', [
        'uses' => 'CompanyController@postAddCompany',
        'as' => 'user.postAddCompany'
    ]);

    Route::get('/import_excel/{id}',[
        'uses' => 'FinancialCenterController@index',
        'as' => 'user.importExcel'
    ] );
    Route::post('/import_excel/import',[
        'uses' => 'FinancialCenterController@import',
        'as' => 'user.import'
    ]);

});


Route::prefix('researcher')->group(function() {
    Route::get('/', [
        'uses' => 'ResearcherController@index',
        'as' => 'researcher.home'
    ]);
});
