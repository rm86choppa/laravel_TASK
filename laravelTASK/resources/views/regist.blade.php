@extends('layouts.base')

@section('title', 'Laravel')

@section('title', 'Laravel')

@section('link', 'regist')

@section('link', 'login')

@section('contents')
<div class="contents_title">
    <h3>Register</h3>
</div>
<div class="items">
<form class="form_items" action="index.html" method="post">
    @csrf
    <dl>
        <dt>Name</dt>
        <dd><input type='text' name='Name' class="name"></dd>
        <dt>E-Mail Address</dt>
        <dd><input type='email' name='email' class="email"></dd>
        <dt>Password</dt>
        <dd><input type='password' name='pass' class="pass"></dd>
        <dt>Confirm Password</dt>
        <dd><input type='password' name='confirm_password' class="confirm_password"></dd>
    </dl>
    <button type="submit" class="btn">Register</button>
    </form>       
</div>
@endsection