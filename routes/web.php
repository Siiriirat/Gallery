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
use App\Category;
use App\Subcategory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Homepage', 'Gallery\GalleryController@index');

Route::get('/AddPhoto', 'Gallery\GalleryController@getaddPhoto');
Route::post('/AddPhoto', 'Gallery\GalleryController@addPhoto');

Route::get('/HidePhoto', 'Gallery\GalleryController@hidePhoto');

Route::get('/getSubcategory', function(){
  $cat_id = Input::get('cat_id');
  $subcategories = Subcategory::where('category_id',$cat_id)->get();
  return Response::json($subcategories);
});

Route::get('Subcategory/{name}/{id}', 'Gallery\GalleryController@getSubcategory');
Route::get('Gallery/{name}/{id}', 'Gallery\GalleryController@getPhoto');
Route::post('Delete/{id}', 'Gallery\GalleryController@deletePhoto');
Route::get('Edit/{name}/{id}', 'Gallery\GalleryController@editPhoto');
Route::post('UpdatePhoto', 'Gallery\GalleryController@updatePhoto');
