<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layouts.head')
    @stack('styles')
</head>

<body>
    @include('layouts.navbar')
    <div>
        <div class="gray-bg">
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                <div class="pull-right">
                    <strong><a target="_blank" href="#">Mohamed Elshahat</a></strong>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
