@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Post</span>
    <a class="dashboard__a" href="/dashboard/posts">Posts</a>
</div>



<div class="table__header">
  
</div>  


<ul class="tableAll__body">

    <h5 class="tableAll__title">{{$post->title}}</h5>
    <p class="tableAll__text">{{$post->text}}</p>

</ul>




    
@endsection