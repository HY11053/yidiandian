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
//前台界面

Route::group(['domain' => 'mip.czga.cn'], function () {
    Route::get('/','Mip\IndexController@Index');
    Route::get('paihangbang','Mip\PaihangbangController@Paihangbang')->name('paihangbang');
    Route::get('paihangbang/page/{page}','Mip\PaihangbangController@Paihangbang')->name('paihangbangpage');
    Route::post('sprodlist/all/','Mip\SeacrhController@SeacrhBrand');
    Route::get('sprodlist/all/','Mip\SeacrhController@SeacrhBrand');
    Route::post('phone/complate/list/','Mip\PhoneController@ComplateBrands');
    Route::get('{path}','Mip\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('{path}/{id}.shtml','Mip\ArticleController@GetArticle')->where('id', '[0-9]+')->name('articles');
    Route::get('{path}/page/{page}','Mip\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}_{tid}_{cid}_{zid}','Mip\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Mip\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
    Route::post('/phonecomplate/','Mip\PhoneController@phoneComplate');
});
Route::group(['domain' => 'm.czga.cn'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('paihangbang','Mobile\PaihangbangController@Paihangbang')->name('paihangbang');
    Route::get('paihangbang/page/{page}','Mobile\PaihangbangController@Paihangbang')->name('paihangbangpage');
    Route::post('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::get('sprodlist/all/','Mobile\SeacrhController@SeacrhBrand');
    Route::post('phone/complate/list/','Mobile\PhoneController@ComplateBrands');
    Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('{path}/{id}.shtml','Mobile\ArticleController@GetArticle')->where('id', '[0-9]+')->name('articles');
    Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
    Route::get('{path}_{tid}_{cid}_{zid}','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Mobile\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
    Route::post('/phonecomplate/','Mobile\PhoneController@phoneComplate');
});
Route::get('/','Frontend\IndexController@Index');
Route::get('paihangbang','Frontend\PaihangbangController@Paihangbang')->name('paihangbang');
Route::get('paihangbang/page/{page}','Frontend\PaihangbangController@Paihangbang')->name('paihangbangpage');
Route::post('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::get('sprodlist/all/','Frontend\SeacrhController@SeacrhBrand');
Route::post('phone/complate/list/','Frontend\PhoneController@ComplateBrands');
Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
Route::get('{path}/{id}.shtml','Frontend\ArticleController@GetArticle')->where('id', '[0-9]+')->name('articles');
Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z0-9/_]+')->name('newspagelist');
Route::get('{path}_{tid}_{cid}_{zid}','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
Route::get('{path}_{tid}_{cid}_{zid}/page/{page}','Frontend\ListNewsController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9_\/]+','tid'=>'[0-9]+','cid'=>'[0-9]+','zid'=>'[0-9]+','page'=>'[0-9]+'])->name('projectlistspage');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
