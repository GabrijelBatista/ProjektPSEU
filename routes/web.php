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

Route::group(['middleware' => ['auth', 'admin']], function() {
  
Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
Route::post('/insertfile3/{id}/update', array('as'=>'insertfile3.update','uses'=>'UploadController@insertFile2'));
Route::post('/insertfile4/{id}/update', array('as'=>'insertfile4.update','uses'=>'UploadController@insertFile3'));
Route::get('/viewfile','DownloadController@downfunc');
Route::get('/viewfile2','DownloadController2@downfunc2');
Route::get('/odbijenizavrsni','ZavrsniController@zavfunc2');
Route::get('/odbijenidiplomski','DiplomskiController@dipfunc2');
Route::get('viewfile/{id}/delete', ['uses' => 'DownloadController@destroy', 'as' => 'viewfile.delete']);
Route::get('viewfile/{id}/delete2', ['uses' => 'DownloadController@destroy2', 'as' => 'viewfile.delete2']);
Route::get('viewfile2/{id}/delete', ['uses' => 'DownloadController2@destroy', 'as' => 'viewfile2.delete']);
Route::get('viewfile2/{id}/delete2', ['uses' => 'DownloadController2@destroy2', 'as' => 'viewfile2.delete2']);

});


Auth::routes();

Route::resource('users', 'ProfileController');
Route::get('/', 'IndexController@index')->name('Home');
Route::get('/uploadfile', 'UploadController@getView');
Route::get('/uploadfile2', 'UploadController2@getView2');
Route::post('/insertfile', array('as'=>'insertfile','uses'=>'UploadController@insertFile'));
Route::post('/insertfile2', array('as'=>'insertfile2','uses'=>'UploadController2@insertFile2'));
Route::get('/prihvacenizavrsni','ZavrsniController@zavfunc');
Route::get('/prihvacenidiplomski','DiplomskiController@dipfunc');
Route::get('logout', 'Auth\LoginController@logout', function () {
   return abort(404);
});
