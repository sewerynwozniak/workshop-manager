@extends('layouts.dashboardLayout')


@section('content')


<div class="dashboard__middleBar">
    <span class="dashboard__title">Add User</span>
    <a class="dashboard__a" href="/dashboard/users">Users</a>
</div>


@php
$usersColumns = Schema::getColumnListing('users'); 
@endphp

<ul class="table__body">
    
    <form class="table__form" method="POST" action="/usersDashboard">
        @csrf
        @for ($i=1; $i< count($usersColumns)-3;$i++)

            @if ($usersColumns[$i]=='role_id')
                
            
            <select name={{$usersColumns[$i]}}>
              
                @foreach ($roles as $role)
                <option value="{{$role['id']}}" {{old('role_id')==$role['id']? 'selected':''}}>{{$role['name']}}</option>
                @endforeach

            </select>
                @continue
            @endif

            @if ($usersColumns[$i]=='password')
                @error($usersColumns[$i])            
                    <p>{{$message}}</p>
                @enderror
                <input name='password' type='password' placeholder='password'>
                <input name='password_confirmation' placeholder="repeat password" type="password">
          
                @continue
            @endif

            @error($usersColumns[$i])            
                <p>{{$message}}</p>
            @enderror

            <input name='{{$usersColumns[$i]}}' type="text" placeholder={{$usersColumns[$i]}} value={{old($usersColumns[$i])}}>
        @endfor
        <input class="btn btn--blue" type="submit" value="Add">
    </form>
        
  
    


</ul>
{{-- {{dd(old('role_id'))}} --}}

@endsection