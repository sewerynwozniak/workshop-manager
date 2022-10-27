@extends('layouts.authLayout')

@section('content')
    
    <div class="authPage">

        <p class="authPage__p">You don't have account? <a href="/register">Register</a></p>

        <form class='authForm__wrapper' method="POST" action="/users/authenticate">
            @csrf
            
            @error('email')
                <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='email' placeholder="email" type="text">
            @error('password')
            <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='password' placeholder="password" type="password">
            
            <input class="authForm__submit btn btn--yellow" type="submit" value="Log in">
        </form>
    </div>

    

@endsection