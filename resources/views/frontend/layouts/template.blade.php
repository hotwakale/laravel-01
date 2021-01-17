<html lang="en">
<head>
    @include('frontend.inc.head')
</head>
<body>
    @include('frontend.inc.nav')


        @yield('content')


    @include('frontend.inc.footer')
    @include('frontend.inc.script')
</body>
</html>