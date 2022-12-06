@extends('layouts.dashboardLayout')


@section('content')

@php
$workshopsColumns = Schema::getColumnListing('workshops'); 
@endphp


@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Workshops</span>
    <a class="btn__add btn btn--green" href="/dashboard/workshops/add">Add new</a>
</div>




<div class="table__header">
    <span>{{$workshopsColumns[1]}}</span>
    <span>Actions</span>
</div>  


<ul class="tableAll__body">

    @foreach ($workshops as $workshop)      
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




    
@endsection