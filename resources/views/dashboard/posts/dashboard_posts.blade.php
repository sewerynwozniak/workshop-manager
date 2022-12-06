@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif


@php
$postsColumns = Schema::getColumnListing('posts'); 
$isAdmin = Auth::user()->role_id ==1;
@endphp


<div class="dashboard__middleBar">
    <span class="dashboard__title">Posts</span>
    @if ($isAdmin)
        <a class="btn__add btn btn--green" href="/dashboard/posts/add">Add new</a>
    @endif  
</div>




<div class="table__header">
    <span>{{$postsColumns[1]}}</span>
    @if ($isAdmin)
        <span>Actions</span>
    @endif
</div>  


<ul class="tableAll__body">

    @foreach ($posts as $post)      
        <li class="tableAll__li">   
            <a class="tableAll__name" href="/dashboard/posts/{{$post->id}}">{{$post['title']}}</a>    
            @if ($isAdmin)
                <div class="tableAll__btnWrapper">
                    <a class="btn btn--blue" href="/dashboard/posts/{{$post['id']}}/edit">Edit</a>
                    <form class="tableAll__form" method="POST" action="/dashboard/posts/{{$post['id']}}">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn--red" type="submit" value="Delete">
                    </form>
                </div>
            @endif
        </li>
    @endforeach

</ul>




    
@endsection