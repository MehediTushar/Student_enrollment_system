<?php

use Illuminate\Support\Facades\Route;

Use Illuminate\Support\Facades\Auth;

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



/*Route::get('/', function(){
    return view('auth.login');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin part
Route::get('/admin/home', 'AdminController@index');

Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');

Route::post('admin', 'Admin\LoginController@login');

//dashboard route

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard.home');

//student route

Route::get('/admin/student/all','StudentController@showallstudents')->name('student.all_view');
Route::get('/admin/student/create','StudentController@create')->name('student.create');
Route::put('/admin/student/create','StudentController@store')->name('student.store');
Route::get('/admin/student/view/{id}','StudentController@show')->name('student.show');
Route::get('/admin/student/edit/{id}','StudentController@edit')->name('student.edit');
Route::post('/admin/student/update/{id}','StudentController@update')->name('student.update');
Route::delete('/admin/student/destroy/{id}','StudentController@destroy')->name('student.destroy');
Route::get('/admin/student/trashview/','StudentController@trashview')->name('student.trashview');
Route::get('/admin/student/softdelete/{id}','StudentController@softdelete');
Route::get('/admin/student/restore/{id}','StudentController@restore');

//department wise subject and student
Route::get('/admin/student/cse','CseController@show')->name('cse.show');
Route::get('/admin/course/cse','CseController@course')->name('cse.course');
Route::get('/admin/student/bba','BbaController@show')->name('bba.show');
Route::get('/admin/course/bba','BbaController@course')->name('bba.course');
Route::get('/admin/student/eee','EeeController@show')->name('eee.show');
Route::get('/admin/course/eee','EeeController@course')->name('eee.course');
Route::get('/admin/student/cen','CenController@show')->name('cen.show');
Route::get('/admin/course/cen','CenController@course')->name('cen.course');


//register route
Route::get('/admin/register/create','RegisterController@create')->name('register.create');
Route::put('/admin/register/create','RegisterController@store')->name('register.store');
Route::get('/admin/register/view','RegisterController@view')->name('register.view');
Route::get('/admin/register/view/{id}','RegisterController@show')->name('register.show');
Route::get('/admin/register/edit/{id}','RegisterController@edit')->name('register.edit');
Route::post('/admin/register/update/{id}','RegisterController@update')->name('register.update');
Route::delete('/admin/register/destroy/{id}','RegisterController@destroy')->name('register.destroy');
Route::get('/admin/register/trashview/','RegisterController@trashview')->name('register.trashview');
Route::get('/admin/register/softdelete/{id}','RegisterController@softdelete');
Route::get('/admin/register/restore/{id}','RegisterController@restore');




//subject route

Route::get('/admin/course/create','CourseController@create')->name('course.create');
Route::post('/admin/course/create','CourseController@store')->name('course.store');
Route::get('/admin/course/view','CourseController@view')->name('course.view');
Route::get('/admin/course/edit/{id}','CourseController@edit')->name('course.edit');
Route::post('/admin/course/update/{id}','CourseController@update')->name('course.update');
Route::get('/admin/course/softdelete/{id}','CourseController@softdelete');
Route::get('/admin/course/restore/{id}','CourseController@restore');
Route::get('/admin/course/trashview/','CourseController@trashview')->name('course.trashview');
Route::delete('/admin/course/destroy/{id}','CourseController@destroy')->name('course.destroy');


//student panel

route::get('/student/home','StudentHomeController@index');
route::get('/student/home/all','StudentHomeController@profile_view')->name('student.all_view');




