@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Roles</span>
    <a class="btn__add btn btn--green" href="/dashboard/roles/add">Add new</a>
</div>


@php
$rolesColumns = Schema::getColumnListing('roles'); 
@endphp

<div class="table__header">
    <span>{{$rolesColumns[1]}}</span>
    <span>Actions</span>
</div>  


<ul class="table__body">

    @foreach ($roles as $role)      
        <li class="table__li">
            {{$role['name']}}
            <div class="table__btnWrapper">
                <a class="btn btn--blue" href="/dashboard/roles/{{$role['id']}}/edit">Edit</a>
                <a class="btn btn--red" href="">Delete</a>
            </div>
        </li>
    @endforeach

</ul>




    
@endsection