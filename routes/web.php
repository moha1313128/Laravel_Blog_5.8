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

	// Comment
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
	

	// Blog Pages
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	// Route::get('blog/', 'BlogController@getSingle');
	Route::get('/contact', 'PagesController@getContact');
	Route::post('/contact', 'PagesController@postContact');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
});

// Route::get('/', function(){
	// Route::resource('posts', 'PostController');
// })->middleware('auth');