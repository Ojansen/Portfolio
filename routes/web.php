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

// $router->get('/', function () use ($router) {
//     return view('home.blade.php');
// });
// $router->get('/', 'PortfolioController@home');
// $router->get('/projecten', 'PortfolioController@projects');
$router->get('/', function () use ($router) { return view('home'); });
$router->get('/projecten', 'PortfolioController@Project');
$router->get('/contact', function () use ($router) { return view('contact'); });
