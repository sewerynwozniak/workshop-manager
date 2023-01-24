@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Workshop</span>
    <a class="dashboard__a" href="/dashboard/workshops">Workshops</a>
</div>



<div class="table__header">
  
</div>  


<ul class="tableAll__body">

    <h5 class="tableAll__title">Date</h5>
    <p class="tableAll__text">{{$workshop->date}}</p>
    <h5 class="tableAll__title">Time</h5>
    <p class="tableAll__text">{{$workshop->time}}</p>
    <h5 class="tableAll__title">Place</h5>
    <p class="tableAll__text">{{$workshop->place}}</p>
    <h5 class="tableAll__title">XP</h5>
    <p class="tableAll__text">{{$workshop->xp}}</p>
    <h5 class="tableAll__title">Description</h5>
    <p class="tableAll__text">{{$workshop->description}}</p>
    

</ul>




    
@endsection