<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main id="main-frame" class="content-margin mb-5 pb-5">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    @yield('footer-scripts')
</body>
</html>