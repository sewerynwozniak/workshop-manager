@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Profile</span>
</div>




<div class="table__header">
    <span>Progress</span>
</div>  


<ul class="tableAll__body">

      
        <li class="tableAll__li">        
            <span>XP</span>
            <span>4324</span>
        </li>
        <li class="tableAll__li">        
            <span>Current league</span>
            <span>Green</span>
        </li>


</ul>




    
@endsection