

@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

@php
    $leagueId = $league->id;
    $leagueName = $league->name;
    //dd($leagueName)

@endphp

<div class="dashboard__middleBar">
    <span class="dashboard__title">Profile</span>
</div>



<div class="table__header">
    <span>Progress</span>
</div>  



<div class="profile__cardContainer">

      
        <div class="profile__card">        
            <h5>XP</h5>
            <p>{{$xp}}</p>
        </div>
        <div class="profile__card">        
            <h5>Current league</h5>
            <p>{{$leagueName}}</p>

            <img src="{{ asset('images/icons/badge-'.$leagueName.'.png') }}" alt="">

        </div>


</div>




    
@endsection