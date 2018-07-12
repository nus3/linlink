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

// TODO: タグ検索の画面へ遷移する用のルートを作る
