@extends('layouts.base')

@section('title', 'Laravel')

@section('title', 'Laravel')

@section('nav')
@isset($Name)
<div class="user">{{$Name}}</div> 
@else
<div class="user">guest</div> 
@endisset

<select name="nav">
    <option value="logout">Logout</option>
</select>
@endsection

@section('contents')
<div class="contents_title">
    <h3>Login</h3>
</div>
<div class="description">
    <p>You are logged in!</p>
</div>
@endsection