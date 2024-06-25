<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>

    @vite(['resources/css/side-nav-bar.css'])
    <script src="https://kit.fontawesome.com/58caef4721.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="main-section">
        @yield('sidebar')
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
