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
Route::get('/index',function (){
   return view('students.index');
});
Route::get('/hasan', function () {
    return view('layouts.master');
});
Route::resource('/addstudent','studentController');
Route::resource('/subject','subjectController');
Route::resource('/teacher','teacherController');
Route::resource('/admission','admissionController');