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


    Route::group(['middleware' => ['role:Admin|Super-Admin']], function () {

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
        
        Route::get('/make_contribution',function () {
            return view('pages.initiate_contribution');
        })->name('make_contribution');
        Route::get('/single_contribution','ContributionController@single_contribution')->name('single_contribution');
        Route::post('/single_contribution','ContributionController@process_single_contribution')->name('single_contribution');
    
    
        Route::get('/department_contribution','ContributionController@department_contribution')->name('department_contribution');
        Route::post('/department_contribution','ContributionController@process_department_contribution')->name('department_contribution');
    
    
        Route::get('/contributions','ContributionController@index')->name('contributions');
        
        Route::get('/withdrawals','WithdrawalController@index')->name('withdrawals');
        Route::get('/disapprove_withdrawal/{id}','WithdrawalController@delete')->name('disapprove_withdrawal');
        Route::get('/approve_withdrawal/{id}','WithdrawalController@approve')->name('approve_withdrawal');
        
        
        
        Route::get('/report',function () {
            return view('pages.initiate_report');
        })->name('report');
    

        Route::get('/withdraw_report','ReportController@withdraw_report')->name('withdraw_report');
        Route::get('/contribution_report','ReportController@contribution_report')->name('contribution_report');
        Route::get('/employee_contribution_report','ReportController@employee_contribution_report')->name('employee_contribution_report');
        Route::post('/employee_contribution_report','ReportController@employee_contribution_report_process')->name('employee_contribution_report');

        //Advanced Search
        Route::post('/withdraw_report','ReportController@withdraw_report_advance')->name('withdraw_report');
        Route::post('/contribution_report','ReportController@contribution_report_advance')->name('contribution_report');
        

    });
    
    
    Route::get('/my_contributions','ContributionController@my_contributions')->name('my_contributions');


    Route::get('/my_withdrawals','WithdrawalController@my_withdrawals')->name('my_withdrawals');
    Route::get('/make_withdrawal',function () {
        return view('pages.make_withdrawal');
    })->name('make_withdrawal');
    Route::post('/make_withdrawal','WithdrawalController@make_withdrawal')->name('make_withdrawal');

    Route::get('/profile','UserController@profile')->name('profile');

    Route::get('/edit_profile',function () {
        $user = Auth::user();
        return view('pages.edit_profile')->with(["user"=>$user]);
    })->name('edit_profile');
    
    Route::post('/update_profile','UserController@update_profile')->name('update_profile');

    Route::get('/change_password',function () {
        return view('pages.change_password');
    })->name('change_password');

    Route::post('/change_password','UserController@change_password')->name('change_password');
    
    
    //Route::get('/report','ReportController@index')->name('report');
    
    

});
