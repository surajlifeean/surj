<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Authenticate Routes
Route::get('auth/login','Auth\AuthController@getLogin');

Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/logout','Auth\AuthController@getLogout');


// Registration Routes

Route::get('auth/register','Auth\AuthController@getRegister');

Route::post('auth/register','Auth\AuthController@postRegister');


 Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');


 Route::get('blog',['as'=>'blog.index','uses'=>'BlogController@getIndex']);

 Route::get('/', 'PagesController@getIndex');
 Route::resource('posts','PostController');



//password reset request
 
 route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');
 route::post('password/email','Auth\PasswordController@SendResetLinkEmail');
 route::post('password/reset','Auth\PasswordController@reset');

//categories

 Route::resource('categories','CategoryController',['except'=>['create']]);

 Route::resource('tags','TagController',['except'=>['create']]);

 Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);

 Route::post('commentsupdate',['uses'=>'CommentsController@update','as'=>'comments.update']);

 Route::post('comments',['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);

 
?>
