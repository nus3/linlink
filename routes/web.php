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

Route::get('/', [
    'middleware' => [
    ],
    'uses' => 'LinkController@index'
])->name('LinkIndex');

Route::get('/search', [
    'middleware' => [
    ],
    'uses' => 'LinkController@search'
])->name('LinkSearch');

Route::get('/find', [
    'middleware' => [
    ],
    'uses' => 'LinkController@find'
])->name('LinkFind');

Route::get('/links', [
    'middleware' => [
    ],
    'uses' => 'LinkController@links'
])->name('LinkLinks');
