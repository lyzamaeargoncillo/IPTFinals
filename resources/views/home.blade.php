<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKS </title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light d-flex justify-content-between">
        <h1>Loks Car Rental</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('cars') ? 'active' : '' }}" href="{{ url('/car') }}">CAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('books') ? 'active' : '' }}" href="{{ url('/customer') }}">CUSTOMER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('rentals') ? 'active' : '' }}" href="{{ url('/rental') }}">RENTALS</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
