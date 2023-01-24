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

{{-- @php
    dd(Auth::user()::find(1)->league->name)
@endphp --}}

<ul class="tableAll__body">

      
        <li class="tableAll__li">        
            <span>XP</span>
            <span>{{$xp}}</span>
        </li>
        <li class="tableAll__li">        
            <span>Current league</span>
            <span>{{Auth::user()::find(1)->league->name}}</span>
        </li>


</ul>




    
@endsection