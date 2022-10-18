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

Route::get('my/first', function () {
    return view('first');
});

// Route::get('student/grades', function () {
//     // from the DB

//     $name = "Ahmed";
//     $grades = ['web' => 88, 'java' => 70, 'laravel' => -40];

//     return view('profile.student.index')->with('name', $name)->with('grades', $grades);
// });



// Route::get('teacher/profile', 'App\Http\Controllers\TeacherController@get_profile');

// Route::get('teacher/timetable', 'App\Http\Controllers\TeacherController@get_timetable');

// Route::get('teacher/rooms/{building}/search/{number}', 'App\Http\Controllers\TeacherController@search_rooms');

// Route::get('student/show', 'App\Http\Controllers\Student\StudentController@show');



// Route::get('room/create', 'App\Http\Controllers\Room\RoomController@create')


// Route::get('room/create', 'App\Http\Controllers\Room\RoomController@create');

// Route::post('room/store/{id}', 'App\Http\Controllers\Room\RoomController@store');

// Route::get('room/create', 'App\Http\Controllers\Room\RoomController@create');

// Route::post('room/store', 'App\Http\Controllers\Room\RoomController@store');

// Route::get('room', 'App\Http\Controllers\Room\RoomController@index');


Route::get('room/create', 'App\Http\Controllers\Room\RoomController@create');

Route::post('room/store', 'App\Http\Controllers\Room\RoomController@store');

Route::get('room', 'App\Http\Controllers\Room\RoomController@index');

Route::post('room/update/{id}', 'App\Http\Controllers\Room\RoomController@update');

Route::get('room/edit/{id}', 'App\Http\Controllers\Room\RoomController@edit');