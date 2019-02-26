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

$router->get('/', function () use ($router) { return view('home'); });
$router->get('/projecten', 'PortfolioController@Project');
$router->get('/blog', ['as' => 'blog', 'uses' => 'PortfolioController@Blog']);
$router->post('/blog/like', 'PortfolioController@Like');
$router->get('/contact', function () use ($router) { return view('contact'); });
$router->get('/skills', function () use ($router) { return view('skills'); });
