<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('/','FrontendController@index');
//Route::get('/frontend.audio.audioview','Mp3listController@index');
Auth::routes();

Route::get('collection','frontend\CollectionController@index');
//frontend

Route::get('collection/{group_url}','frontend\CollectionController@groupview');

Route::get('collection/{group_url}/{cate_url}','frontend\CollectionController@categoryview');
Route::get('collection/{group_url}/{cate_url}/{subcate_url}','frontend\CollectionController@subcategoryview');





Route::group(['middleware' => ['auth','isUser']], function () {
Route::get('/home', 'HomeController@index')->name('home');
});


Route::group(['middleware' => ['auth','isAdmin']], function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

 


   //Group
     Route::get('group','Admin\GroupController@index');
     Route::get('group-add','Admin\GroupController@viewpage');
     Route::post('group-store','Admin\GroupController@store');
     Route::get('group-edit/{id}','Admin\GroupController@edit');
     Route::put('group-update/{id}','Admin\GroupController@update');
     Route::get('group-delete/{id}','Admin\GroupController@delete');
     Route::get('group-deleted-record','Admin\GroupController@deleterecordes');
      Route::get('group-re-store/{id}','Admin\GroupController@deleterestore');
       



    //Category
    Route::get('/category','Admin\CategoryController@index');
    Route::get('category-add','Admin\CategoryController@create');
    Route::post('category-store','Admin\CategoryController@store');
    Route::get('category-edit/{id}','Admin\CategoryController@edit');
    Route::put('category-update/{id}','Admin\CategoryController@update');
    Route::get('category-delete/{id}','Admin\CategoryController@delete');
    Route::get('category-delete-record','Admin\CategoryController@deleterecord');
    Route::get('category-re-store/{id}','Admin\CategoryController@deleterestore');
      
     //sub category
     Route::get('/sub-category','Admin\SubcategoryController@index');
     Route::Post('sub-category-store','Admin\SubcategoryController@store');
     Route::get('subcategory-edit/{id}','Admin\SubcategoryController@edit');
     Route::put('sub-category-update/{id}','Admin\SubcategoryController@update');
     Route::get('subcategory-delete/{id}','Admin\SubcategoryController@delete');
     Route::get('subcategory-delete-record','Admin\SubcategoryController@deleterecord');
     Route::get('subcategory-re-store/{id}','Admin\SubcategoryController@deleterestore');

      //Audio mp3
      Route::get('home-audio','Admin\AudioController@index');
      Route::get('add-audio','Admin\AudioController@create');
      Route::post('store-audio','Admin\AudioController@store');
      Route::get('edit-audio/{id}','Admin\AudioController@edit');
      Route::put('update-audio/{id}','Admin\AudioController@update');



//slider
    Route::get('home-slider','Admin\SliderController@index');
    Route::get('add-slider','Admin\SliderController@create');
    Route::post('store-slider','Admin\SliderController@store');
    Route::get('edit-slider/{id}','Admin\SliderController@edit');
    Route::put('update-slider/{id}','Admin\SliderController@update');


   


     Route::get('registered-user','Admin\RegisteredController@index');
     Route::get('role-edit/{id}','Admin\RegisteredController@edit');
     Route::put('role-update/{id}','Admin\RegisteredController@updaterole');


     
});


Route::group(['middleware' => ['auth','isVendor']], function () {
    Route::get('/vendor-dashboard', function () {
        return view('vendor.dashboard');
     });


    });

    Route::get('/testaudio', function () {
        return view('frontend.audio.testaudio');
    });
    
    Route::get('/audiomp3', function () {
        return view('frontend.audio.audio-mp3');
    });


    Route::get('/aboutus', function () {
        return view('pages.aboutus');
    });
  
    Route::get('/contactus', function () {
        return view('pages.contact');
    });
  
    Route::get('/cookie', function () {
        return view('/cookie');
    });
  