<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    @include('user.layouts.head')
</head>
<body>
    @include('user.layouts.header')

    @section('main-content')
        
    @show

    @include('user.layouts.footer')

    @include('user.layouts.jquery')
</body>
</html>