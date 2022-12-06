@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Add Posts</span>
    <a class="dashboard__a" href="/dashboard/posts">Posts</a>
</div>



<ul class="table__body">

    <div class="table__li">
        <form class="table__form" method="POST" action="/dashboard/posts">
            @csrf
            <input name='title' type="text" placeholder="title">
            <textarea name="text" id="" cols="30" rows="10" placeholder="text"></textarea>
            <input class="btn btn--blue" type="submit" value="Add">
        </form>
        
    </div>
    


</ul>


@endsection