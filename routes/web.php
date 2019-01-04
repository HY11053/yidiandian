<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['domain' => 'm.yidiandian.com'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('{path}/{id}.shtml','Mobile\ArticleController@GetArticle')->where('id', '[0-9]+')->name('articles');
    Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
});
Route::get('/','Frontend\IndexController@Index');
Route::post('phone/complate/list/','Frontend\PhoneController@ComplateBrands');
Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
Route::get('{path}/{id}.shtml','Frontend\ArticleController@GetArticle')->where('id', '[0-9]+')->name('articles');
Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
