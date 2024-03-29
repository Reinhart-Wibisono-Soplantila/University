<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\StudentController;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/student', 'StudentController@index');
$router->get('/student/{id}', 'StudentController@show');
$router->post('/student/create', 'StudentController@create');
$router->delete('/student/{FirstName}', 'StudentController@delete');
$router->put('/student/update/{id}', 'StudentController@update');
