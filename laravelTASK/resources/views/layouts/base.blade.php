<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <style>
        
    </style>
</head>
<body>
    <header>
        <div class="header_title">
        <h1>@yield('title')</h1>
        </div>
        <div class="nav">  
            @yield('nav')
        </div>
    </header>
    <div class="contents">
        @yield('contents')
    </div>
</body>
</html>
