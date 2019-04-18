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
Route::get('/ttt',function(){
	return view('layouts.new.index.main2');
});
// Route::get('/ttt',)
/////////////// trial //////////////////////
Route::get('/categories', function(){
	return view('layouts.new.categories');
});

Route::get('/s', [
	'uses' => 'Postcontroller@search',
	'as'   => 'search'
]);


////////////////// primary /////////////
Route::get('/', [
	'uses' => 'Postcontroller@index',
	'as'   => 'blog'
]);

Route::get('/blog/{post}', [
	'uses' => 'Postcontroller@show',
	'as'   => 'frontendblog.show'
]);

Route::get('/category/{category}',[
	'uses'=>'Postcontroller@category',
	'as'=>'category'


]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);
Route::get('/auther/{auther}',[
	'uses'=>'Postcontroller@auther',
	'as'=>'auther'


]);
Route::get('/tag/{tag}',[
	'uses'=>'Postcontroller@tag',
	'as'=>'tag'


]);
Route::put('/submitemail', [
	'uses' => 'Postcontroller@submitemail',
	'as'   => 'submitemail'
]);

// Route::get('/categories',[
// 	'uses'=>return view('layouts.new.categories'),
// 	'as'=>'categories'


// ]);


Route::get('/about-us',function(){
	return view('layouts.new.contact');
});

Route::get('/categories', function(){
	return view('layouts.new.categories');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
	return abort(404);
});
Route::get('/home', 'backend\HomeController@index')->name('home');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');


Route::put('/backend/blog/restore/{blog}', [
	'uses' => 'Backend\BlogController@restore',
	'as'   => 'blog.restore'
]);

Route::delete('/backend/blog/force-destroy/{blog}', [
	'uses' => 'Backend\BlogController@forceDestroy',
	'as'   => 'blog.force-destroy'
]);
Route::resource('/backend/blog','backend\BlogController');
Route::resource('/backend/category','backend\CategoryController');
Route::resource('/backend/users','backend\UsersController');

Route::get('/backend/users/confirm/{users}', [
	'uses' => 'Backend\UsersController@confirm',
	'as'   => 'users.confirm'
]);
