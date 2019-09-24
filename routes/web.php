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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
    'uses' => 'CompanyController@showAllCompany',
    'as' => 'showAllCompany'
]);

Route::get('/companyDetails/{id}', [
    'uses' => 'CompanyController@companyDetails',
    'as' => 'companyDetails'
]);


Route::get('/mng', [
    'uses' => 'Auth\LoginController@showAdminLoginForm',
    'as' => 'adminLogin'
]);

Route::post('/mngpostLogin', [
    'uses' => 'Auth\LoginController@adminLogin',
    'as' => 'adminPostLogin'
]);


Route::get('/login', [
    'uses' => 'Auth\LoginController@userLogin',
    'as' => 'login'
]);

Route::post('/postLogin', [
    'uses' => 'Auth\LoginController@postLogin',
    'as' => 'postLogin'
]);

Route::get('/register', [
    'uses' => 'Auth\RegisterController@register',
    'as' => 'register'
]);

Route::post('/postRegister', [
    'uses' => 'Auth\RegisterController@create',
    'as' => 'postRegister'
]);


Route::post('/logout', [
    'uses' => 'Auth\LoginController@Logout',
    'as' => 'logout'
]);


Route::prefix('admin')->group(function() {
    Route::get('/', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);
    Route::get('/investmentsRequests', [
        'uses' => 'InvestmentsRequestsController@showAllRequest',
        'as' => 'admin.investmentsRequests'
    ]);
    
    });
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('user')->group(function() {
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'user.home'
    ]);
    // --------Company Section--------
    Route::get('/companies', [
        'uses' => 'CompanyController@showUserCompany',
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
    Route::get('editCompany/{id}', [
        'uses' => 'CompanyController@editCompany',
        'as' => 'user.editCompany'
    ]);
    Route::post('postEditCompany/{id}', [
        'uses' => 'CompanyController@postEditCompany',
        'as' => 'user.postEditCompany'
    ]);
    Route::get('/import_excel/{id}',[
        'uses' => 'ListController@index',
        'as' => 'user.importExcel'
    ] );
    Route::post('/import_excel/import/{id}',[
        'uses' => 'ListController@import',
        'as' => 'user.import'
    ]);

    // Route::post('/addInvestmentsRequests/{company_id}', [
    //     'uses' => 'InvestmentsRequestsController@postAddRequests',
    //     'as' => 'user.addInvestmentsRequests'
    // ]);

});

Route::post('/addInvestmentsRequests', [
    'uses' => 'InvestmentsRequestsController@postAddRequests',
    'as' => 'addInvestmentsRequests'
]);



Route::prefix('researcher')->group(function() {
    Route::get('/', [
        'uses' => 'ResearcherController@index',
        'as' => 'researcher.home'
    ]);
    Route::get('/companies', [
        'uses' => 'ResearcherController@showAllCompany',
        'as' => 'researcher.showCompanies'
    ]);

});
