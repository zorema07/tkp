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

Route::get('/', 'WelcomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function()
{
	Route::get('home', 'HomeController@index');
    Route::resource('category','CategoryController');
	Route::resource('post','PostController');
	Route::resource('albumcat','AlbumCatController');
	Route::resource('album','AlbumController');
	Route::resource('photo','PhotoController');
	Route::resource('user','UserController');
	Route::resource('monthpdf','MonthPdfController');
	Route::resource('pdf','PdfController');
	Route::post('redactorupload', function(){
	    $file = Request::file('file');
		$move = $file->move('public/images', $file->getClientOrginalName());

		if($move){
			return Response::json(['filelink'=> 'images
				/' . $file->getClientOrginalName()]);
			}
			else{
				return Response::json(['error'=>true]);
			}
	});
});
Route::resource('groupcategory','GroupCategoryController');
Route::resource('grouppost','GroupPostController');
Route::resource('public','PublicController');
Route::get('view/{id}/thalaikantu','ViewController@thalaikantu');
Route::get('view/{id}/news','ViewController@news');
Route::get('view/{id}/article','ViewController@article');
Route::get('public/{id}/post','PublicController@post');
Route::get('public/{id}/list','PublicController@lists');
Route::resource('gallery','GalleryController');
Route::get('family',function(){
	return view('family');
});
Route::get('list', 'PageController@listByCat');

Route::get('galleryalbum', 'GalleryController@album');
Route::get('galleryphoto', 'GalleryController@photo');

