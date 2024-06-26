@extends('layouts.login-template')

@section('page-title')
    Delivery App: Log In
@endsection

@section('signup-login-title')
    Welcome to Sign in
@endsection

@section('signup-login-description')
    Your gateway to seamless deliveries.
@endsection

@section('signup-login-route')
{{--    {{ route('signup-view') }}--}}
    #
@endsection

@section('signup-login-navigate')
    Buckle Up
@endsection

@section('form-title')
    Sign In
@endsection

@section('login-register-form')
    <form action="{{ route('login') }}" class="signin-form" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="label" for="email_or_username">Email/Username</label>
            <input type="text" class="form-control" placeholder="Email/Username" name="email_or_username" id="email_or_username" required>
            @error('email_or_username')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
            @error('password')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
        </div>
        <div class="form-group d-md-flex">
            <div class="w-50 text-left">
                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="w-50 text-md-right">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="text-danger">{{ session()->get('message') }}</div>
        @endif
    </form>
@endsection
