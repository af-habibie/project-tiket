<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="https://www.dumetschool.com/dsicon.ico">
    <title>@yield('name')</title>
    <style>.navbar-toggler:focus,.navbar-brand:focus,.nav-link:focus{outline:none;}</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('halaman/beranda') }}">Doctype</a>
        <button class="navbar-toggler border-0 pr-0" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/service') }}">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/partner') }}">Partner</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/product/samsung-galaxy-s10-plus') }}">GAlaxy S10+</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/product/samsung-galaxy-s20-ultra') }}">GAlaxy S20 Ultra</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('menu/product/samsung-galaxy-s21-plus') }}">GAlaxy S21+</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>