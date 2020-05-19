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
//Expresiones regulares
Route::pattern('id', '\d+');//indica que solo acepta números
Route::pattern('hex', '[a-f0-9]+');

Route::get('hexroute/{hex?}', function($hex = null) {
	return $hex;
});
/*Route::get('post/{id?}', function($id = null) {
	if($id === null) {
		return "id not specified";
	}
    return "Retrieving the post with id $id";
});*/

/*Route::get('user/{id}/profile', ['as' => 'profile', function($id) {
	$url = route('profile', ['id' => $id]);
	$badUrl = 'user/'.$id.'/profile';
    return "Retrieving profile $url";
}]);*/

Route::group(['prefix' => 'user'],
	function() {
		Route::get('/', function() {
			return '/user';
		});
		Route::get('profile', function () {
			return 'user/profile';
		});
	});