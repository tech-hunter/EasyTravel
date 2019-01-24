    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <!-- CSRF Token -->--}}
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
        
    {{--  Page Title  --}}
    <title> Easy Travel @yield('page_title') </title>

    {{-- Icon in Tab --}}
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo.png') }}"> 

    <link rel="stylesheet" href="{{asset('backend/js/vendor/simple-line-icons/css/simple-line-icons.css')}}">
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">  --}}
    
    <link rel="stylesheet" href="{{asset('backend/js/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('backend/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    @yield('stylesheet')