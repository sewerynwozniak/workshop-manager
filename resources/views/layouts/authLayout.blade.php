<!DOCTYPE html>
<html class='authPageHeight' lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class='authPageHeight'>

    
    <div class="authPage__wrapper">

        <a href="/" class="authPage__a btn">Home</a>

        @yield('content')


        <footer class='footer'>
            <h6 class='footer__h6'>Copyright © 2022</h6>
        </footer>
        
    </div>

    
</body>
</html>