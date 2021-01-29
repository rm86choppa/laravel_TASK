@extends('layouts.base')

@section('title', 'Laravel')

@section('title', 'Laravel')

@section('nav')
<a href="regist">regist</a>
<a href="login">login</a>
@endsection

@section('contents')
<div class="contents_title">
    <h3>Register</h3>
</div>
<div class="items">
<form class="form_items" action="/regist" method="POST">
    @csrf
    <dl>
        @error('Name')
        <dt class="error">エラー</dt>
        <dd class="error">{{$message}}</dd>
        @enderror
        <dt>Name</dt>
        <dd><input type='text' name='Name' class="name" value="{{old('Name')}}"></dd>

        @error('email')
        <dt class="error">エラー</dt>
        <dd class="error">{{$message}}</dd>
        @enderror
        <dt>E-Mail Address</dt>
        <dd><input type='email' name='email' class="email" value="{{old('email')}}"></dd>
        
        @error('pass')
        <dt class="error">エラー</dt>
        <dd class="error">{{$message}}</dd>
        @enderror
        <dt>Password</dt>
        <dd><input type='password' name='pass' class="pass" value="{{old('pass')}}"></dd>

        @error('confirm_password')
        <dt class="error">エラー</dt>
        <dd class="error">{{$message}}</dd>
        @enderror
        
        <dt>Confirm Password</dt>
        <dd><input type='password' name='confirm_password' class="confirm_password" value="{{old('confirm_password')}}"></dd>
    </dl>
    <button type="submit" class="btn">Register</button>
</form>       
</div>
@endsection