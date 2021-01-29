<?php

/*** 登録画面へのルート ***/
Route::resource('regist', 'RegistController', ['only' => ['index']]);

/*** ログイン画面へのルート ***/
Route::resource('login', 'LoginController', ['only' => ['index']]);
?>