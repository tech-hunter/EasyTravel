
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" /> 
    {{-- <!-- CSRF Token -->--}}
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    {{--  Page Title  --}}
    <title> Easy Travel @yield('page_title') </title>

    {{-- Icon in Tab --}}
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo.png') }}"> 
    
    {{--  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"/>  --}}
    
    @yield('stylesheet')