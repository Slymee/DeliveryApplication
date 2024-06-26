<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>

    @vite(['resources/css/side-nav-bar.css'])
    @yield('vite-resource')
    <script src="https://kit.fontawesome.com/58caef4721.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="main-section">
        {{--Side Bar--}}
        <aside class="sidebar">
            <div class="sidebar-header">
                <h3>Delivery App</h3>
                <i class="fa-solid fa-bars toggle-btn" id="toggle-btn"></i>
            </div>
            <ul class="menu">
                <li><a href="#"><i class="fa-solid fa-chart-column"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Messages</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
            </ul>
        </aside>

        <main class="content">
            <div class="dashboard-header-bar">@yield('header-bar')</div>
            <div class="dashboard-section">
                @yield('content')
            </div>
        </main>
    </section>
</body>

<script>
    document.getElementById('toggle-btn').addEventListener('click', function() {
        var sidebar = document.querySelector('.sidebar');
        var content = document.querySelector('.content');
        sidebar.classList.toggle('sidebar-collapsed');
        content.classList.toggle('sidebar-collapsed')
    });
</script>
</html>
