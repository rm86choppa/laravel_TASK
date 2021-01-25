@extends('layouts.base')

@section('title', 'Laravel')

@section('title', 'Laravel')

@section('link', 'regist')

@section('link', 'login')

@section('contents')
<div class="contents_title">
    <h3>Login</h3>
</div>
<div class="items">
<form class="form_items" action="index.html" method="post">
    @csrf
    <dl>
        <dt>E-Mail Address</dt>
        <dd><input type='email' name='email' class="email"></dd>
        <dt>Password</dt>
        <dd><input type='password' name='pass' class="pass"></dd>
    </dl>
    <p><input type="checkbox" name="remenber_me" value="1">Remenber Me</p>
    <button type="submit" class="btn">Login</button>
    <a href="#">Forgot Your Password?</a>
    </form>       
</div>
@endsection