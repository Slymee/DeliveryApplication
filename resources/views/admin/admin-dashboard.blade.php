@extends('layouts.admin-dashboard-template')

@section('page-title')
    Delivery App: Dashboard
@endsection

@section('vite-resource')
    @vite(['resources/css/admin-dashboard.css'])
@endsection

@section('header-bar')
    <div class="dashboard-title">Dashboard</div>
    <div class="user-title">Username</div>
@endsection

@section('content')
    <div class="stats-container">
        <div class="stats-box">
            <div>
                <div>17000</div>
                <div>Users</div>
            </div>
            <div>asdasd</div>
        </div>

        <div class="stats-box">
            <div>
                <div>17000</div>
                <div>Completed</div>
            </div>
            <div>asdasd</div>
        </div>

        <div class="stats-box">
            <div>
                <div>17000</div>
                <div>Active Users</div>
            </div>
            <div>asdasd</div>
        </div>

        <div class="stats-box">
            <div>
                <div>17000</div>
                <div>Earnings</div>
            </div>
            <div>asdasd</div>
        </div>
    </div>
@endsection
