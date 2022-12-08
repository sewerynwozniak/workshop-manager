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

@php
    $isAdmin = Auth::user()->role_id ==1;
@endphp

    <div class="dashboard__wrapper">

        <div class="sidebar__wrapper">
            <span class="sidebar__logo">PS</span>
            <ul class="sidebar__menu">

                    <li class="sidebar__li">
                        <a class="sidebar__menuItem" href="/dashboard">
                            <img class="sidebar__icon" src="{{ asset('images/icons/dashboard.png') }}" alt=""> 
                            <span class="sidebar__menuTitle">Dashboard</span>
                        </a>
                    </li>

                @if ($isAdmin)
                    <li class="sidebar__li">
                        <a class="sidebar__menuItem" href="/dashboard/users">
                            <img class="sidebar__icon" src="{{ asset('images/icons/user.png') }}" alt=""> 
                            <span class="sidebar__menuTitle">Users</span>
                        </a>
                    </li>
                    <li class="sidebar__li">
                        <a class="sidebar__menuItem" href="/dashboard/roles">
                            <img class="sidebar__icon" src="{{ asset('images/icons/roles.png') }}" alt=""> 
                            <span class="sidebar__menuTitle">Roles</span>
                        </a>
                    </li>

                @endif

                <li class="sidebar__li">
                    <a class="sidebar__menuItem" href="/dashboard/posts">
                        <img class="sidebar__icon" src="{{ asset('images/icons/post.png') }}" alt=""> 
                        <span class="sidebar__menuTitle">Posts</span>
                    </a>
                </li>
                <li class="sidebar__li">
                    <a class="sidebar__menuItem" href="/dashboard/workshops">
                        <img class="sidebar__icon" src="{{ asset('images/icons/calendar.png') }}" alt=""> 
                        <span class="sidebar__menuTitle">Workshop</span>
                    </a>
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
        
            <div class="dashboard__content">
                @yield('content')
            </div>

    
            

        </div>

        <script src="/js/dashboard.js"></script>

    </div>


    
        


    
</body>
</html>