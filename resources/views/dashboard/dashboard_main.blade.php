@extends('layouts.dashboardLayout')

<style>
    
</style>

@section('content')
    <h3 class="dashboard__headline">Hi {{Auth::user()->name}}!</h3>





    <div class="dashboardCard__wrapper">

        <div class="dashboardCard__card dashboardCard__card--workshop">
            <h5 class="dashboardCard__title">Upcoming workshop</h5>
            @if ($upcomingUserWorkshop)
                <p class="dashboardCard__subtitle">{{$upcomingUserWorkshop->date}}</p>
                <p class="dashboardCard__dashboardCard__subtitle">{{$upcomingUserWorkshop->time}}</p>
                <p class="dashboardCard__dashboardCard__subtitle">{{$upcomingUserWorkshop->place}}</p>
                <a class="dashboardCard__btn btn--yellow" href="/dashboard/workshops/{{{$upcomingUserWorkshop->id}}}">View</a>
                                 
            @else
                <p class="dashboardCard__subtitle">no workshop</p>
            
            @endif
            
        </div>

        <div class="dashboardCard__card dashboardCard__card--post">
            <h5 class="dashboardCard__title">Last Post</h5>
            <p class="dashboardCard__subtitle">{{$latestPost->title}}</p>
      
            <a class="dashboardCard__btn btn--yellow" href="/dashboard/posts/{{{$latestPost->id}}}">View</a>
        </div>

    </div>
    


@endsection