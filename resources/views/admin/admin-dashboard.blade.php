@extends('layouts.admin-dashboard-template')

@section('page-title')
    Delivery App: Dashboard
@endsection

@section('sidebar')
    <aside class="sidebar">
    <div class="sidebar-header">
        <h3>Delivery App</h3>
        <i class="fa-solid fa-bars toggle-btn" id="toggle-btn"></i>
    </div>
    <ul class="menu">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> Messages</a></li>
    </ul>
    </aside>

    <main class="content">
        <p>Main content goes here.</p>
    </main>
@endsection
