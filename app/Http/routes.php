<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('dashboard');
//}); 


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('home', function()
		{
			return view('splash');
		}
	);

	Route::get('/', function()
		{
			return view('splash');
		}
	);
	
	Route::get('dashboard', ['uses' => 'PagesController@dashboard']);
	Route::get('profile', 'PagesController@profile');
	Route::get('settings', 'PagesController@settings');
	Route::patch('settings', 'PagesController@updateSettings');
	Route::get('profile/edit', 'PagesController@editProfile');
	Route::patch('profile', 'PagesController@updateProfile');
	
	Route::resource('programs', 'ProgramsController');
	
	Route::get('mylogout', 'PagesController@mylogout');
	
	Route::controllers([
		'auths' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
});
