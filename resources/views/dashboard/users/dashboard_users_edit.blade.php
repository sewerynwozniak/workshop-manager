@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Edit User</span>
    <a class="dashboard__a" href="/dashboard/users">Users</a>
</div>


@php
$usersColumns = Schema::getColumnListing('users'); 
$userAttr = $user->getAttributes();
@endphp

<ul class="table__body">

    <form class="table__form" method="POST" action="/users/{{$user->id}}">
        @method('PUT')
        @csrf
        @foreach ($userAttr as $key=>$val)
            
            @if ($key=='role_id')
                <select name={{$key}}>
                    @foreach ($roles as $role)
                    <option value={{$role['id']}} {{$val==$role['id']?'selected':''}}>{{$role['name']}}</option>
                    @endforeach              
                </select>
                @continue
            @endif
            @if ($key =='id'||$key =='remember_token'||$key =='password'|| $key=='created_at'||$key=='updated_at')
                @continue
            @endif
            {{-- @if ($key =='password')
                @error('passwordRepeat')
                    <p style="color:#fff">{{$message}}</p>
                @enderror
                    <input name={{$key}} placeholder="password">
                @error('passwordRepeat')
                    <p style="color:#fff">{{$message}}</p>
                @enderror
                    <input name='password_confirmation' placeholder="repeat password" type="password">
                @continue
            @endif --}}
            @error($key)
                <p>{{$message}}</p>
            @enderror
            <input name={{$key}} type="text" value="{{$val}}">
        @endforeach


        
        <input class="btn btn--blue" type="submit" value="Save">
    </form>
        
  


    
    


</ul>


@endsection