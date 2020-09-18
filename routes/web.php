<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');
Route::get('/about', function () {
    return view('about');
});
Route::get('/skills', function () {
    return view('skills');
});
// Route::get('/works', function () {
//     return view('works');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/main', function () {
    return view('main');
});

Route::get('/works', function(){
    return view('works');
})->name('works');

Route::get('/home', function(){
    return view('home');
})->name('home');

// Route::resource('/works', 'WorksController')->names([
//     'index' => 'works.index',
//     'update' => 'works.update',
//     'create' => 'works.create',
//     'edit' => 'works.edit',
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('project', 'ProjectController@index')->name('project.index');
Route::get('works', 'WorksController@index');
Route::get('create', 'ProjectController@create')->name('create.project');
Route::post('store', 'ProjectController@store')->name('project.store');
Route::get('edit/project/{id}', 'ProjectController@edit');
Route::get('delete/project/{id}', 'ProjectController@delete');
Route::post('update/project/{id}', 'ProjectController@update');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');