<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        header { border-bottom: solid 1px rgb(201, 196, 196); }
        h1 { margin: 0%; }
        header { line-height: 60px; }
        .header_title { display: inline-block; }
        .nav { float: right; margin: 0 20px 0 0; }
        .contents { width: 500px; margin: 15px 15px 15px 15px; }
        .contents_title { border: solid 1px rgb(201, 196, 196); background-color: rgb(238, 235, 235); }
        .contents_title h3 { line-height: 15px; }
        form{ padding:30px 50px; border: solid 1px rgb(201, 196, 196); }
        form dl dt{ width: 165px; padding:10px 0; float:left; clear:both; }
        form dt { text-align:  right; margin-right: 15px; }
        form dl dd{ padding:10px 0; }
        .nav .user { float: left; margin-right: 5px; }
        .description {  border: solid 1px rgb(201, 196, 196); }
        .error { color: red; }
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
