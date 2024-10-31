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
                    <strong><a target="_blank" href="https://www.linkedin.com/in/mohamed-elshahat-0a7747190">Mohamed Elshahat</a></strong>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
