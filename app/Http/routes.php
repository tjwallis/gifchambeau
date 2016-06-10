<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

	return "test";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->get('gif/{league}','GifController@index');
	$app->get('gif/{id}','GifController@getGif');
	$app->post('gif','GifController@createGif');
	$app->put('gif/{id}','GifController@updateGif');
	$app->delete('gif/{id}','GifController@deleteGif');
});
