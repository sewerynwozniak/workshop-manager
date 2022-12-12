@extends('layouts.dashboardLayout')


@section('content')
@if (session('message'))
    <div class="flash">
        {{ session('message') }}
    </div>
@endif

<div class="dashboard__middleBar">
    <span class="dashboard__title">Settings</span>
</div>




<div class="table__header">
    <span>Avatar</span>
</div>  


<ul class="tableAll__body">

      
        <li class="tableAll__li">        
            <img src="{{asset('/storage/avatar/'.Auth::user()->avatar)}}" alt="">
            <div class="tableAll__btnWrapper">
                <form class="tableAll__form" method="POST" action="/dashboard/settings/{{Auth::user()->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" name="avatar" value="Change">
                    <input class="btn btn--blue" type="submit" value="Save">
                </form>
            </div>
        </li>


</ul>




    
@endsection