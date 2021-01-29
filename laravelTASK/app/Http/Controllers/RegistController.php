<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewRegistrationRequest;

class RegistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('regist');
    }

    public function post(NewRegistrationRequest $request) {
        $userInfo = $request->all();
        return view('home', $userInfo);
    }

    
}
