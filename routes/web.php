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

Route::get('/login', function () {
    return view('auth.login');
})->name("login");


Route::post('/login','AuthController@login')->name('process_login');
Route::get('/logout','AuthController@logout')->name('logout');




Route::group(array('middleware' => 'auth'), function(){

    Route::get('/dashboard','DashboardController@index');
    Route::get('/','DashboardController@index')->name('dashboard');

    Route::get('/profile', function () {
        return view('pages.profile');
    })->name("profile");



    Route::get('/departments','DepartmentController@index')->name('departments');
    Route::get('/add_department','DepartmentController@add')->name('add_department');
    Route::post('/add_department','DepartmentController@store')->name('add_department');
    Route::get('/delete_department/{id}','DepartmentController@delete')->name('delete_department');
    Route::get('/restore_department/{id}','DepartmentController@restore')->name('restore_department');
    Route::get('/edit_department/{id}','DepartmentController@edit')->name('edit_department');
    Route::post('/edit_department/{id}','DepartmentController@save_edit')->name('edit_department');

    


    Route::get('/users','UserController@index')->name('users');
    Route::get('/add_user','UserController@add')->name('add_user');
    Route::post('/add_user','UserController@store')->name('add_user');
    Route::get('/delete_user/{id}','UserController@delete')->name('delete_user');
    Route::get('/restore_user/{id}','UserController@restore')->name('restore_user');
    Route::get('/edit_user/{id}','UserController@edit')->name('edit_user');
    Route::post('/edit_user/{id}','UserController@save_edit')->name('edit_user');


    Route::get('/contribution_types','ContributionTypeController@index')->name('contribution_types');
    Route::get('/add_contribution_type','ContributionTypeController@add')->name('add_contribution_type');
    Route::post('/add_contribution_type','ContributionTypeController@store')->name('add_contribution_type');
    Route::get('/delete_contribution_type/{id}','ContributionTypeController@delete')->name('delete_contribution_type');
    Route::get('/restore_contribution_type/{id}','ContributionTypeController@restore')->name('restore_contribution_type');
    Route::get('/edit_contribution_type/{id}','ContributionTypeController@edit')->name('edit_contribution_type');
    Route::post('/edit_contribution_type/{id}','ContributionTypeController@save_edit')->name('edit_contribution_type');
    
    Route::get('/make_contribution','ContributionController@index')->name('make_contribution');
    

});
