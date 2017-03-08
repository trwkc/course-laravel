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

Route::get('/', 'ReminderController@listTask');
Route::post('/reminder/new','ReminderController@addReminder');
Route::delete('/reminder/delete','ReminderController@deleteReminder');

// Route::get('/profile', 'ProfileController@getProfile');

// Route::get('/profile/name', 'ProfileController@getName');
// Route::get('/profile/surname', 'ProfileController@getSurname');
// Route::get('/profile/birthday', 'ProfileController@getBirthday');
// Route::get('/profile/age', 'ProfileController@getAge');
// Route::get('/profile/birthYear/{year}', 'ProfileController@getBirthYear');