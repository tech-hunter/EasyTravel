<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.frontend.header') 
    {{--  This will include all CSS files which are connected into header.blade.php in partials Folder  --}}
</head>
<body class="body">
    @include('partials.frontend.navbar')

    @yield('content')

    @include('partials.frontend.footer')
    @include('partials.frontend.script')
    {{--  This will include all JS files which are connected into javascript.blade.php in partials Folder  --}}
</body>
</html>