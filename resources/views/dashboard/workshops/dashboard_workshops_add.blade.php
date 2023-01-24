@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Add Workshop</span>
    <a class="dashboard__a" href="/dashboard/workshops">Workshops</a>
</div>



<ul class="table__body">

    <div class="table__li">
        <form class="table__form" method="POST" action="/dashboard/workshops">
            @csrf
            <input name='date' type="date">
            <input name='time' type="time">
            <input name='place' type="text" placeholder="place">
            <input name='xp' type="number" placeholder="xp" min="10" max="100" step="10">
            <span>Add participants</span>
            @foreach ($users as $user)
                <div class="table__checkboxWrapper">
                    <input type="checkbox" name="users[]" value="{{$user->id}}">
                    <label for="{{$user->id}}">{{$user->name}}</label>
                </div>            
            @endforeach
            <textarea name='description' cols="30" rows="10" placeholder="description"></textarea>
            <input class="btn btn--blue" type="submit" value="Add">
        </form>
        
    </div>
    


</ul>


@endsection



