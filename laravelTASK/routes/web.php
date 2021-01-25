<?php

/*** 登録画面へのルート ***/
Route::get('regist', 'RegistController@index');

Route::post('regist', 'RegistController@post');

/*** ログイン画面へのルート ***/
Route::get('login', 'LoginController@login');