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
    </style>
</head>
<body>
    <header>
        <div class="header_title">
        <h1>@yield('title')</h1>
        </div>
        <div class="nav">  
            <a href="#">@yield('link')</a>
            <a href="#">@yield('link')</a>
        </div>
    </header>
    <div class="contents">
        <div class="contents_title">
            <h3>@yield('title')</h3>
        </div>
        <form class="contact" action="index.html" method="post">
            @csrf
            <dl>
                <?php $items = [
                    ['dt'=>'Name', 'dd_type'=>'text', 'dd_name'=>'Name', 'dd_class'=>'Confirm'],
                    ['dt'=>'E-Mail Address', 'dd_type'=>'email', 'dd_name'=>'email', 'dd_class'=>'email'],
                    ['dt'=>'Password', 'dd_type'=>'password', 'dd_name'=>'pass', 'dd_class'=>'pass'],
                    ['dt'=>'Confirm Password', 'dd_type'=>'password', 'dd_name'=>'confirm_password', 'dd_class'=>'confirm_password']
                 ];
                  foreach ($items as $settings) : ?>
                    <dt><?php echo $settings['dt']; ?></dt>
                    <dd><input type=<?php echo $settings['dd_type']; ?> name=<?php echo $settings['dd_name']; ?> 
                            class="<?php echo $settings['dd_class']; ?>"></dd>
                <?php endforeach?>
            </dl>
            <button type="submit" class="btn">@yield('button')</button>
            </form>       
        </div>
    </div>
    
</body>
</html>
