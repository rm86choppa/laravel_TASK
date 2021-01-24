<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index() {
        $items = [
            ['dt'=>'Name', 'dd_type'=>'text', 'dd_name'=>'Name', 'dd_class'=>'Confirm'],
            ['dt'=>'E-Mail Address', 'dd_type'=>'email', 'dd_name'=>'email', 'dd_class'=>'email'],
            ['dt'=>'Password', 'dd_type'=>'password', 'dd_name'=>'pass', 'dd_class'=>'pass'],
            ['dt'=>'Confirm Password', 'dd_type'=>'password', 'dd_name'=>'confirm_password', 'dd_class'=>'confirm_password']
         ];
        return view('regist', $items);
    }
    //フォームを送信した時の処理
    public function post(Request $request) {

    }

    //複数アクションの定義ができる
    //(web.phpではアクション名を指定してどれを実行するか決めれる)
    public function hello() {
        /*$login_items = [
            ['dt'=>'E-Mail Address', 'dd_type'=>'email', 'dd_name'=>'email', 'dd_class'=>'email'],
            ['dt'=>'Password', 'dd_type'=>'password', 'dd_name'=>'pass', 'dd_class'=>'pass']
        ];*/ 
        //$login_items
        return <<<EOF

        <html>
            <head>
                <title>登録画面2</title>
            </head>
            <body>
                @component('components.header')
                @endcomponent
                <h1>登録画面です2</h1>
            </body>
        </html>
        EOF;
    }
}
