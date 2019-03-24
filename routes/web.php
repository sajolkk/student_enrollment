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

// Route::get('/', 'adminController@index');
// Route::get('/dashboard', 'adminController@dashboard');
// Route::get('/admin-login', 'adminController@admin_login');
// Route::post('/admin-login-process', 'adminController@admin_login_process');
// Route::get('/admin-logout', 'adminController@admin_logout');
Route::get('/',function()	
{	
	return view('admin.admin_layout');
});
Route::get('/add-student', 'studentController@index');
Route::post('/save-student', 'studentController@save_student');
Route::get('/all-student', 'studentController@all_student');
Route::get('/student-profile/{student_id}', 'studentController@student_profile');
Route::get('/update-student/{student_id}', 'studentController@update_student');
Route::post('/update-stuprocess/{student_id}', 'studentController@update_stuprocess');
Route::get('/delete-student/{student_id}', 'studentController@delete_student');

Route::get('/add-teacher', 'teacherController@index');
Route::post('/save-teacher', 'teacherController@save_teacher');
Route::get('/all-teacher', 'teacherController@all_teacher');
Route::get('/teacher-profile/{teacher_id}', 'teacherController@teacher_profile');
Route::get('/update-teacher/{teacher_id}', 'teacherController@update_teacher');
Route::post('/update-terprocess/{teacher_id}', 'teacherController@update_terprocess');
Route::get('/delete-teacher/{teacher_id}', 'teacherController@delete_teacher');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


















