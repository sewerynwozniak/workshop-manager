@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Edit Posts</span>
    <a class="dashboard__a" href="/dashboard/posts">Posts</a>
</div>


<ul class="table__body">

    <div class="table__li">
        <form class="table__form" method="POST" action="/dashboard/posts/{{$post['id']}}">
            @csrf
            @method('PUT')
            <input name='title' type="text" value="{{$post['title']}}">
            <textarea name="text" id="" cols="30" rows="10">{{$post['text']}}</textarea>
            <input class="btn btn--blue" type="submit" value="Save">
        </form>
        
    </div>

</ul>


@endsection