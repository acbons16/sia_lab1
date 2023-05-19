<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api'], function () use ($router) {
$router->get('/users',['uses' => 'UserController@getUsers']);

});

$router->post('/adduser', 'UserController@addstud'); //insert new record

$router->delete('/deluser/{id}', 'UserController@deletestudid'); // delete student record by studid

$router->put('/updateuser/{id}', 'UserController@updatestudid'); // update student record by studid

$router->get('/getuser/{id}', 'UserController@getstudid'); // search student by studid

$router->get('/allusers', 'UserController@getallstud'); // view all student records