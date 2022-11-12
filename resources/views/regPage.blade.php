@extends('layouts.authLayout')

@section('content')
    
    <div class="authPage">

        <h3 class="authPage__h3">Register</h3>


        <p class="authPage__p">You already have account? <a href="/login">Log in</a></p>

        <form class='authForm__wrapper' action="/users" method="POST">
            @csrf
            @error('name')
                <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='name' placeholder="username" type="text">
            @error('email')
                <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='email' placeholder="email" type="text">
            @error('password')
            <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='password' placeholder="password" type="password">
            @error('passwordRepeat')
            <p style="color:#fff">{{$message}}</p>
            @enderror
            <input class='authForm__input' name='password_confirmation' placeholder="repeat password" type="password">
            <input class="authForm__submit btn btn--yellow" type="submit" value="Register">
        </form>
    </div>

    

@endsection