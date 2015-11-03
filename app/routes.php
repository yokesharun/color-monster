<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'index', 'uses' => 'ColorController@index'));

Route::get('/create', array('as' => 'create', 'uses' => 'ColorController@create'));

Route::get('/top', array('as' => 'top', 'uses' => 'ColorController@top'));

Route::post('/create_process', array('as' => 'create_process', 'uses' => 'ColorController@create_process'));

Route::post('/color-vote', array('as' => 'color-vote', 'uses' => 'ColorController@vote_color'));

// admin login

Route::get('/login', array('as' => 'login', 'uses' => 'AdminController@login'));
