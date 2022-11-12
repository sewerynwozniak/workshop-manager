@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Users</span>
    <a class="btn__add btn btn--green" href="/dashboard/users/add">Add new</a>
</div>


@php
$usersColumns = Schema::getColumnListing('users'); 
@endphp

<div class="table__header">
    <span>{{$usersColumns[1]}}</span>
    <span>Actions</span>
</div>  


<ul class="tableAll__body">

    @foreach ($users as $user)      
        <li class="tableAll__li">        
            <span class="tableAll__name">{{$user['name']}}</span>
            <div class="tableAll__btnWrapper">
                <a class="btn btn--blue" href="/dashboard/users/{{$user['id']}}/edit">Edit</a>
                <form class="tableAll__form" method="POST" action="/dashboard/users/{{$user['id']}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn--red" type="submit" value="Delete">
                </form>
            </div>
        </li>
    @endforeach

</ul>




    
@endsection