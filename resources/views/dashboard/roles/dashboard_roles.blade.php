@extends('layouts.dashboardLayout')


@section('content')

@php
$rolesColumns = Schema::getColumnListing('roles'); 
$isAdmin = Auth::user()->role_id ==1;
@endphp


@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Roles</span>
    <a class="btn__add btn btn--green" href="/dashboard/roles/add">Add new</a>
</div>




<div class="table__header">
    <span>{{$rolesColumns[1]}}</span>
    <span>Actions</span>
</div>  


<ul class="tableAll__body">

    @foreach ($roles as $role)      
        <li class="tableAll__li">
            {{$role['name']}}
            <div class="tableAll__btnWrapper">
                <a class="btn btn--blue" href="/dashboard/roles/{{$role['id']}}/edit">Edit</a>
                {{-- <a  href="/dashboard/roles/{{$role['id']}}">Delete</a> --}}
                <form class="tableAll__form" method="POST" action="/dashboard/roles/{{$role['id']}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn--red" type="submit" value="Delete">
                </form>
            </div>
        </li>
    @endforeach

</ul>




    
@endsection