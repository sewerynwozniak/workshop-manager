<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="topBar">
        <div class="topBar__logo">Public Speaker</div>
        <div class="dropdown__wrapper">
           @auth                         
                <button class="dropdown__btn"> <span class="dropdown__username">{{Auth::user()->name}}</span> <img class="dropdown__icon" src="{{asset('images/icons/down-arrow.png')}}" alt="arrow down icon"></button>
                <div class="dropdown__listWrapper hide">
                    <a class="dropdown__dashboard" href="/dashboard">Dashboard</a>
                    <form class="dropdown__form" action="/logout" method="post">
                        @csrf
                        <input class="dropdown__logout" type="submit" value="Log out">
                    </form>
                </div>           
            @else                
                <a class="topBar__login" href="/login">Login</a>
            @endauth
        </div>
    </div>


    @yield('content')


    <footer class='footer'>
        <h6 class='footer__h6'>Copyright © 2022</h6>
    </footer>
</body>
<script src="/js/landingPage.js"></script>
</html>