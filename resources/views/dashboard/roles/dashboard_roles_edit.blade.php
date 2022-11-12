@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Edit Roles</span>
    <a class="dashboard__a" href="/dashboard/roles">Roles</a>
</div>


<ul class="table__body">

    <div class="table__li">
        <form class="table__form" method="POST" action="/dashboard/roles/{{$role['id']}}">
            @csrf
            @method('PUT')
            <input name='name' type="text" value={{$role['name']}}>
            <input class="btn btn--blue" type="submit" value="Save">
        </form>
        
    </div>

</ul>


@endsection