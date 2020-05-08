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

/*
Esto es raro... en 7 el archivo routes.php está en otro lado... no te líes Oscar que te conoces bien...
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return "Hello world";
});

Route::post('/welcome', function () {
    return "Hello world";
});

Route::put('/welcome', function () {
    return "Hello world";
});

Route::delete('/welcome', function () {
    return "Hello world";
});*/

/*Si son todos se puede cambiar match por any*/
/*Route::match(['get', 'post', 'put', 'delete'], 'welcome', function() {
    return "Some random text...";
});*/

Route::get('post/{id}', function($id) {
    return "Retrieving the post with id $id";
});

