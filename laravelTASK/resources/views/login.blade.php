<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <style>
        body{
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }
        h1{
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
        }
        ul{
            font-size: 12pt;
        }
        hr{
            margin: 25pt 100pt;
            border-top: 1px dashed #ddd;
        }
        .menutitle{
            font-size: 14pt;
            font-weight: bold;
            margin: 0px;
        }
        .content{
            margin: 10px;
        }
        
    </style>
</head>
<body>
    
        <header>

            <div class="nav">
                <h1>Laravel</h1>
                <a href={{ url('/regist')}}>regist</a>
                <a href={{ url('/login')}}>login</a>
        </header>
</body>
</html>


