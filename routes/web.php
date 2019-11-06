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
| Verb          Path                        Action  Route Name
| GET           /gift                      index   gift.index
| GET           /gift/create               create  gift.create
| POST          /gift                      store   gift.store
| GET           /gift/{id}               show    gift.show
| GET           /gift/{id}/edit          edit    gift.edit
| PUT|PATCH     /gift/{id}               update  gift.update
| DELETE        /gift/{id}               destroy gift.destroy
*/

/* Landing Page */
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'gift'], function(){
    Route::get('/create', 'GiftController@create')->name('gift.create');
    Route::get('/',       'GiftController@index')->name('gift.index');
    Route::post('/',      'GiftController@store')->name('gift.store');
});

// Route::resource('gift', 'GiftController');
