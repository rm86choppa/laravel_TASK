<?php

/*** 登録画面へのルート ***/
Route::resource('regist', 'RegistController', ['only' => ['index', 'store']]);

/*** ログイン画面へのルート ***/
Route::resource('login', 'LoginController', ['only' => ['index']]);

/*** ログイン後のホーム画面へのルート ***/
Route::resource('home', 'HomeController@store', ['only' => ['index']]);


?>