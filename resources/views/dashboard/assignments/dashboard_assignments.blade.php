

@extends('layouts.dashboardLayout')


@section('content')



@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

@php

$postsColumns = Schema::getColumnListing('posts'); 
$isAdmin = Auth::user()->role_id ==1;



@endphp

<div class="dashboard__middleBar">
    <span class="dashboard__title">Assignments</span>
    @if ($isAdmin)
        <a class="btn__add btn btn--green" href="/dashboard/workshops/add">Add new</a>
    @endif  
</div>





<div class="table__header">
    <span>Title</span>
    <span>Actions</span>
</div>  


@if ($isAdmin)

<ul class="tableAll__body">

    @foreach ($upcomingAllWorkshops as $workshop)      

        <li class="tableAll__li">
          
            <a class="tableAll__name" href="/dashboard/workshops/{{$workshop->id}}">{{$workshop['date']}}</a>

                <div class="tableAll__btnWrapper">
                    <a class="btn btn--blue" href="/dashboard/workshops/{{$workshop['id']}}/edit">Edit</a>
                    <form class="tableAll__form" method="POST" action="/dashboard/workshops/{{$workshop['id']}}">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn--red" type="submit" value="Delete">
                    </form>
                </div>        
        </li>
    @endforeach

</ul>

<p class="tableAll__separator">Past workshops</p>

<ul class="tableAll__body tableAll__body--past">

    @foreach ($pastAllWorkshops as $workshop)      

        <li class="tableAll__li">
          
            <a class="tableAll__name" href="/dashboard/workshops/{{$workshop->id}}">{{$workshop['date']}}</a>
            
            <div class="tableAll__btnWrapper">

                @php
                    $row = DB::table('user_workshop')
                        ->where('workshop_id', (int)$workshop->id )
                        ->where('user_id', Auth::user()->id)
                        ->value('claimed');

                   
                @endphp

                @if (!$row)
                    <a class="btn btn--green" href="/dashboard/workshops/{{$workshop['id']}}/claimReward">Claim reward</a>
                @endif            
                <a class="btn btn--blue" href="/dashboard/workshops/{{$workshop['id']}}/edit">Edit</a>
                <form class="tableAll__form" method="POST" action="/dashboard/workshops/{{$workshop['id']}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn--red" type="submit" value="Delete">
                </form>
            </div>
        </li>
    @endforeach

</ul>

@else

<ul class="tableAll__body">

    @foreach ($upcomingUserWorkshops as $workshop)      

        <li class="tableAll__li">
          
            <a class="tableAll__name" href="/dashboard/workshops/{{$workshop->id}}">{{$workshop['date']}}</a>
      
        </li>
    @endforeach

</ul>

<p class="tableAll__separator">Past workshops</p>

<ul class="tableAll__body tableAll__body--past">

    @foreach ($pastUserWorkshops as $workshop)      

        <li class="tableAll__li">
          
            <a class="tableAll__name" href="/dashboard/workshops/{{$workshop->id}}">{{$workshop['date']}}</a>
            
        </li>
    @endforeach

</ul>


@endif  



    
@endsection