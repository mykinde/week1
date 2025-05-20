<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @include('partials.navbar')
        @yield('content')
    </div>
</body>
</html>
