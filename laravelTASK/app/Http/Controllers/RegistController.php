<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index() {
        return view('regist');
    }
    //フォームを送信した時の処理
    public function post(Request $request) {

    }
}
