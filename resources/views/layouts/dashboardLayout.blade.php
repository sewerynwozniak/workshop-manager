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

    <div class="dashboard__wrapper">

        <div class="sidebar__wrapper">
            <span class="sidebar__logo">PS</span>
            <ul class="sidebar__menu">
                <li class="sidebar__li">
                    <a class="sidebar__menuItem" href="/dashboard/users">Users</a>
                </li>
                <li class="sidebar__li">
                    <a class="sidebar__menuItem" href="/dashboard/roles">Roles</a>
                </li>
      
            </ul>

        </div>

        <div class="dashboard__main">

            <div class="topBar--dashboard">
                
                <div class="topBar__auth">
                    <button class="dropdown__btn"> <span class="dropdown__username">{{Auth::user()->name}}</span> <img class="dropdown__icon" src="{{asset('images/icons/down-arrow.png')}}" alt="arrow down icon"></button>
                    <div class="dropdown__listWrapper hide">
                        <a class="dropdown__dashboard" href="/">Home</a>
                        <form class="dropdown__form" action="/logout" method="post">
                            @csrf
                            <input class="dropdown__logout" type="submit" value="Log out">
                        </form>
                    </div>  
                </div>
            </div>
        

    
            @yield('content')

        </div>

        <script src="/js/dashboard.js"></script>

    </div>


    
        


    
</body>
</html>