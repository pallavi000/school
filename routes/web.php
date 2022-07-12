<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/page', [App\Http\Controllers\HomeController::class, 'page'])->name('page');
Route::get('/download/{id}', [App\Http\Controllers\HomeController::class, 'getDownload'])->name('download');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/courses/syllabus',[App\Http\Controllers\SyllabusController::class,'syllabus'])->name('courses.syllabus');
    Route::get('/history/add/{id}',[App\Http\Controllers\HistoryController::class,'history'])->name('history.add');
    Route::resource('history',App\Http\Controllers\HistoryController::class);
});

Route::group(['middleware'=>'IsAdmin'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('course',App\Http\Controllers\CourseController::class);
    Route::resource('material',App\Http\Controllers\MaterialController::class);
    Route::resource('category',App\Http\Controllers\CategoryController::class);
});