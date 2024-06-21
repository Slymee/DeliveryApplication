@extends('layouts.login-template')

@section('page-title')
    Delivery App: Sign Up
@endsection

@section('signup-login-title')
    Welcome to Sign up
@endsection

@section('signup-login-description')
    Already have an account?
@endsection

@section('signup-login-route')
    {{ route('login-view') }}
@endsection

@section('signup-login-navigate')
    Sign In
@endsection

@section('form-title')
    Sign Up
@endsection

@section('login-register-form')
    <form action="{{ route('register') }}" class="signin-form" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="label" for="full_name">Full Name</label>
            <input type="text" class="form-control" placeholder="Full Name" name="full_name" id="full_name" value="{{ old('full_name') }}">
            @error('full_name')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="address">Address (Street, Ward no., City, District)</label>
            <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="{{ old('address') }}">
            @error('address')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="email">Email Address</label>
            <input type="text" class="form-control" placeholder="Email Address" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="username">Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="{{ old('username') }}">
            @error('username')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            @error('password')
                <div class="text-danger">{{ $message }}<sup>*</sup></div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password_confirmation" id="password_confirmation">
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
        </div>
{{--        <div class="form-group d-md-flex">--}}
{{--            <div class="w-50 text-left">--}}
{{--                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="checkmark"></span>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="w-50 text-md-right">--}}
{{--                <a href="#">Forgot Password?</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </form>
@endsection
