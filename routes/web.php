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


// Route::middleware('auth')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Auth::routes();

Route::group(['middleware' => ['web']], function() {
	Auth::routes();
	// Route::auth();
	// Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);

	// Tag
	Route::resource('tags', 'TagController', ['except' => ['create']]);	
	
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	// Route::get('blog/', 'BlogController@getSingle');
	Route::get('/contact', 'PagesController@getContact');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
});

// Route::get('/', function(){
	// Route::resource('posts', 'PostController');
// })->middleware('auth');