<?php

/*** 登録画面へのルート ***/
Route::get('regist', 'RegistController@index');

Route::post('regist', 'RegistController@post');

//複数アクションがあるとき、indexアクションは上のように
//URLを省略した形で書くことが一般的
//(他のアクションはしたのようにURLにアクション名を含める)
Route::get('hello', 'RegistController@hello');
/*** 登録画面へのルート ***/

/*** ログイン画面へのルート ***/

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function () {
    return view('welcome');
});
