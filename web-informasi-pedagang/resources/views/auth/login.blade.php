@extends('layouts.app')

@section('content')

<div class="loginBox">
        <img src="/images/user1.png" class="user">
        <h2><b>LOGIN ADMIN</b></h2>
        <form method="POST" action="{{ route('login') }}">
        @csrf

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Password">

             @error('password')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
             @enderror

            <input type="submit" value="LOGIN">
           
        </form>
    </div>

@endsection
