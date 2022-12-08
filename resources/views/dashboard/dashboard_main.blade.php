@extends('layouts.dashboardLayout')


@section('content')
    <h3 class="dashboard__headline">Hi {{Auth::user()->name}}!</h3>


    @foreach ($workshops as $workshop)
        <p>{{$workshop->date}}</p>
    @endforeach

@endsection