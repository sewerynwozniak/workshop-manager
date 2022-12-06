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

    <h5 class="tableAll__title">{{$workshop->date}}</h5>
    <p class="tableAll__text">{{$workshop->time}}</p>
    <p class="tableAll__text">{{$workshop->place}}</p>
    <p class="tableAll__text">{{$workshop->description}}</p>

</ul>




    
@endsection