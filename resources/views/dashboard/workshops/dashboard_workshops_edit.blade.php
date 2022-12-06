@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Edit Workshops</span>
    <a class="dashboard__a" href="/dashboard/roles">Workshops</a>
</div>


<ul class="table__body">

    <div class="table__li">

        <form class="table__form" method="POST" action="/dashboard/workshops/{{$workshop['id']}}">
            @csrf
            @method('PUT')
            <input name='date' type="date" value={{$workshop['date']}}>
            <input name='time' type="time" value={{$workshop['time']}}>
            <input name='place' type="text" placeholder="place" value={{$workshop['place']}}>
            <span>Add participants</span>
            {{-- @foreach ($users as $user)
                <div class="table__checkboxWrapper">
                    <input type="checkbox" name="{{$user->id}}" id="{{$user->id}}">
                    <label for="{{$user->id}}">{{$user->name}}</label>
                </div>            
            @endforeach --}}
            <textarea name='description' cols="30" rows="10" placeholder="description">{{$workshop['description']}}</textarea>
            <input class="btn btn--blue" type="submit" value="Add">
        </form>
    </div>

</ul>


@endsection