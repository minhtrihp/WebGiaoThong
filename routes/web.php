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

Route::get('/', function () {
    return view('user_view.index');
});

Route::get('/pages/maps', function () {
    return view('pages.maps');
});

Route::get('/pages/news/news', 'MagazineController@getList');
Route::get('/multiplechoice', function() {
    return view('multiplechoice');
});

Route::get('/admin/', function(){
    return view('admin_view.layouts.indexAdmin');
});

Route::group(['prefix' => 'admin'], function() {
   Route::group(['prefix' => 'topics'], function() {

        Route::get('list','TopicsController@getList');

        Route::get('add','TopicsController@getAdd');
        Route::post('add','TopicsController@postAdd');

        Route::get('edit/{id}','TopicsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{id}','TopicsController@postEdit'); //post để đưa data lên server

        Route::get('del/{id}','TopicsController@getDel');
    });

    Route::group(['prefix' => 'news'], function() {

        Route::get('list','NewsController@getList');

        Route::get('add','NewsController@getAdd');
        Route::post('add','NewsController@postAdd');

        Route::get('edit/{id}','NewsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{id}','NewsController@postEdit'); //post để đưa data lên server

        Route::get('del/{id}','NewsController@getDel');
    });

   Route::group(['prefix' => 'drivinglicenses'], function() {

        Route::get('list','DLsController@getList');

        Route::get('add','DLsController@getAdd');
        Route::post('add','DLsController@postAdd');

        Route::get('edit/{id}','DLsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{id}','DLsController@postEdit'); //post để đưa data lên server

        Route::get('del/{id}','DLsController@getDel');
    });
   Route::group(['prefix' => 'drivingtests'], function() {

        Route::get('list','DTsController@getList');

        Route::get('add','DTsController@getAdd');
        Route::post('add','DTsController@postAdd');

        Route::get('edit/{id}','DTsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{id}','DTsController@postEdit'); //post để đưa data lên server

        Route::get('del/{id}','DTsController@getDel');
    });
   Route::group(['prefix' => 'questiontests'], function() {

        Route::get('list','QTsController@getList');

        Route::get('add','QTsController@getAdd');
        Route::post('add','QTsController@postAdd');

        Route::get('edit/{id}','QTsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{id}','QTsController@postEdit'); //post để đưa data lên server

        Route::get('del/{id}','QTsController@getDel');
    });
    Route::group(['prefix' => 'users'], function() {

        Route::get('list','UsersController@getList');
    });
});
Auth::routes();

Route::get('/pages/news/news','PagesController@tintuc');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('search',['as'=>'search','uses'=>'PagesController@getSearch']);
