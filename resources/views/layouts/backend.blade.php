<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.backend.header') 
    {{--  This will include all CSS files which are connected into header.blade.php in partials Folder  --}}
</head>
<body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        @include('partials.backend.topnav')

        <div class="main-container">
            @include('partials.backend.sidenav')

            <div class="content">
                @yield('content')
            </div>
        
            {{--  @include('partials.backend.footer')  --}}
        </div>        
    </div>
    
    @include('partials.backend.script')
    {{--  This will include all JS files which are connected into javascript.blade.php in partials Folder  --}}
</body>
</html>