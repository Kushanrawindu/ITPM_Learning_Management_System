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
    return view('user.index');
});

  
  Route::get('/about', function () {
    return view('user.about');
  });
  
  Route::get('/contact', function () {
    return view('user.contact');
  });
  
  // Route::get('/courses_single', function () {
  //   return view('user.courses_single');
  // });

  Route::resource('/courses_single', 'coursesingleController');

  // Route::resource('/assignment','assignStatusController');
  
  // Route::get('/courses', function () {
  //   return view('user.courses');
  // });
  
  Route::get('/events', function () {
    return view('user.events');
  });
  
  Route::get('/news', function () {
    return view('user.news');
  });

  Route::get('/assignment/upload',function(){
    return view('user.assignments.upload');
  });

  Route::resource('/assignment/submit','submitAssignmentController');

Route::get('/admin/home', function () {
    return view('admin.index');
});

Route::resource('/assignment', 'assignStatusController');

Route::resource('/courses', 'userCourseController');

Route::resource('/admin/course','courseController');

Route::resource('/admin/courseMaterials','courseMaterialController');

Route::resource('/admin/student','studentController');
Route::post('student/search', 'studentController@search')->name('student.search');

Route::resource('/admin/teacher','teacherController');

Route::resource('/admin/assignment','assignmentController');

Route::resource('/admin/uploadedAssignment','uploadedAssignmentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/administer','adminController');
//Route::resource('/logging', 'loggingController@index');
