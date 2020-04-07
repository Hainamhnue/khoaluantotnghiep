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
    return view('Login.login');
})->name('login');
Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('admin/login', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);
Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);
Route::resource('admin/score-faculty', 'Admin\ScoreFacultyController');
Route::resource('admin/score-transgress', 'Admin\ScoreTransgressFacultyController');
Route::resource('admin/profile','Admin\InforFacultyController');
Route::resource('admin/quan-ly','User\UserController');


Route::group(['middleware' => 'checkLogin', 'prefix' => 'admin'], function() {
    Route::get('/', function () {
        return view('Login.login');
    });
});

Route::group(['middleware' => 'checkLogin', 'prefix' => 'user'], function() {
    Route::get('/home',function (){
        return view('FrontEnd.ccvc');
    })->name('home');

});
Route::get('/signup',function (){
    return view('Login.Signup');
});
Route::post('/signup', ['as' => 'postaccount', 'uses' => 'CreateNewAccount@postNewAccount']);
