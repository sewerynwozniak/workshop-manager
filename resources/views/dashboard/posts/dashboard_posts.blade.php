@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Posts</span>
    <a class="btn__add btn btn--green" href="/dashboard/posts/add">Add new</a>
</div>


@php
$postsColumns = Schema::getColumnListing('posts'); 
@endphp

<div class="table__header">
    <span>{{$postsColumns[1]}}</span>
    <span>Actions</span>
</div>  


<ul class="tableAll__body">

    @foreach ($posts as $post)      
        <li class="tableAll__li">        
            <span class="tableAll__name">{{$post['title']}}</span>
            <div class="tableAll__btnWrapper">
                <a class="btn btn--blue" href="/dashboard/posts/{{$post['id']}}/edit">Edit</a>
                <form class="tableAll__form" method="POST" action="/dashboard/posts/{{$post['id']}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn--red" type="submit" value="Delete">
                </form>
            </div>
        </li>
    @endforeach

</ul>




    
@endsection