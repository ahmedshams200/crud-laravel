<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::view('/home' , 'pages.home')->name('home');

// Courses Route
Route::get('/courses' , [CourseController::class , 'index'])
->name('courses');
// Create New Course
Route::view('/create' , 'pages.create')->name('create');
Route::post('/store' , [CourseController::class , 'store'])
->name('store');
// Show Details
Route::get("/courses/{id}" , [CourseController::class , 'show'])
->name('details');
// Update Course
Route::get('/courses/{id}/edit' , [CourseController::class , 'edit'])
->name('edit');
Route::put('/courses/{id}' , [CourseController::class , 'update'])
->name('update');
// Delete Course
Route::delete('/courses/{id}' , [CourseController::class , 'destroy'])
->name('destroy');

// once we run the project go to /home

Route::get('/' , function(){
    return redirect('/home');
});
