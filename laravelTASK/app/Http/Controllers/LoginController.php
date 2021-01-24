<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return <<<EOF

        <html>
            <head>
                <title>登録画面</title>
            </head>
            <body>
                <h1>登録画面です</h1>
            </body>
        </html>
        EOF;
    }
}
