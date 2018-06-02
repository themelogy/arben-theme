<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    @include('partials.metadata')
</head>
<body>
<div class="page-wraper">
    <div id="loading-area"></div>
    @yield('header')
    @yield('content')
    @include('partials.footer-2')
    <button class="scroltop fa fa-chevron-up"></button>
</div>
@include('partials.scripts')
</body>
</html>