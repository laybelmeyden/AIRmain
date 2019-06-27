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

Route::get('/', 'MainController@index');

Route::get('/new{solo}', 'MainController@blogsolo');
Route::get('/mer{solo}', 'MainController@eventsolo');
Route::get('/promero{solo}', 'MainController@eventprosolo');

Route::get('/konf{solo}', 'MainController@konfsolo');

Route::get('/gall{solo}', 'MainController@photosolo');
Route::get('/rukovodstvo', 'MainController@rukovodstvo');
Route::get('/agent', 'MainController@agent');

Route::get('/experts', 'MainController@experts');

Route::get('/regions', 'MainController@regions');

Route::get('/photos', 'MainController@photos');

Route::get('/shop', 'MainController@shop');

Route::get('/itstart', 'MainController@itstart');

Route::get('/robostart', 'MainController@robostart');

Route::get('/nicanoair', 'MainController@nicanoair');

Route::get('/publication', 'MainController@publication');

Route::get('/books', 'MainController@books');

Route::get('/creative', 'MainController@creative');

Route::get('/constract', 'MainController@constract');

Route::get('/stazir', 'MainController@stazir');

Route::get('/events', 'MainController@events');

Route::get('/eventpros', 'MainController@eventpros');

Route::get('/thenews', 'MainController@thenews');

Route::get('/docs', 'MainController@docs');

Route::get('/contacts', 'MainController@contacts');

Route::get('/global', 'MainController@glob');

Route::get('/uchdocs', 'MainController@uchdocs');

Route::get('/otchet', 'MainController@otchet');

Route::get('/search', 'MainController@search1');

Route::post('/search', 'MainController@search');

Route::post('/footerform', 'MessagesController@footerform');

Route::post('/eventsoloform', 'MessagesController@eventsoloform');

Route::post('/podpiska', 'MessagesController@podpiska');

Route::post('/krujokrobo', 'MessagesController@krujokrobo');

Route::post('/jurnal', 'MessagesController@jurnal');

Route::post('/creativform', 'MessagesController@creativform');

Route::post('/shopform', 'MessagesController@shopform');
Route::post('/shopform2', 'MessagesController@shopform2');
Route::post('/shopform3', 'MessagesController@shopform3');

Route::get('/oplataone', 'MainController@oplataone');

Route::get('/oplatatwo', 'MainController@oplatatwo');

Route::get('/oplatathree', 'MainController@oplatathree');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

