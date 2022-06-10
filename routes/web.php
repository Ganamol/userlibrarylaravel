<?php

use App\Http\Controllers\UserregController;
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


 Route::group(['middleware'=>'user'],function()
 {

 Route::get('/admindashboard','UserregController@viewadmindashboard')->name('viewadmindashboard');
Route::get('logout','UserregController@logout')->name('logout');
 });


 Route::get('/', function () {return view('index');});
 Route::get('/index','UserregController@index')->name('index');
 Route::post('/login','UserregController@login')->name('login');

Route::get('/login','UserregController@invalidlogin')->name('invalidlogin');

Route::get('/usereg','UserregController@userreg')->name('userreg');

Route::post('/userregistration','UserregController@userregistration')->name('userregistration');

Route::get('/viewuserregistration','UserregController@viewuserreg')->name('viewuserreg');

Route::get('viewregister/{id}','UserregController@view_userreg')->name('view_userreg');
Route::post('/approve','UserregController@approve')->name('approve');

Route::post('/viewbook','BookController@viewbook')->name('viewbook');
Route::get('/addbook','BookController@addbook')->name('savebook');



Route::get('/viewprofile','UserregController@viewprofile')->name('viewprofile');
    

