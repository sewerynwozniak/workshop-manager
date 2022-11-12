@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Add Roles</span>
    <a class="dashboard__a" href="/dashboard/roles">Roles</a>
</div>



<ul class="table__body">

    <div class="table__li">
        <form class="table__form" method="POST" action="/dashboard/roles">
            @csrf
            <input name='name' type="text">
            <input class="btn btn--blue" type="submit" value="Add">
        </form>
        
    </div>
    


</ul>


@endsection