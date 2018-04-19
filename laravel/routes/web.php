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

Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@ComingSoon');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

//must be authenticated to access these specific routes.
Route::group(['middleware' => ['web']], function() {
    Route::get('/team-registration', 'TeamsController@create');

    Route::post('/team-registration', 'TeamsController@store');

    Route::get('/verify/{hash}/{id}', 'VerificationController@verify');
});

Route::get('/home', 'HomeController@index');

Route::get('/about', function(){
    return view('about');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*Oauth Routes*/
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
