<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{isset($description)?$description:''}}" />
    
    <meta name="title" content="{{ isset($title)?$title:env('APP_NAME') }}">
    <meta name="keywords" content="{{isset($keywords)?$keywords:''}}">


    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ isset($title)?$title:env('APP_NAME') }}">
    <meta property="og:description" content="{{isset($description)?$description:''}}">    
    <meta property="og:site_name" content="{{ isset($title)?$title:env('APP_NAME') }}">
    <meta property="og:url" content="{{ asset('images/logo.png') }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Estimated reading time">
    <meta name="twitter:data1" content="1 minute">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/logo.png') }}">

    <title>{{ isset($title)?$title:env('APP_NAME') }}</title>

    @include('layouts.links')

    @yield('css')
</head>

<body>
    <div class="main-body">
        <div class="row">
            @include('layouts.navbar')
            <div class="col-md-10">
                @include('layouts.header')
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.popup')
    @include('layouts.footer')
    @include('layouts.scripts')
    
    @yield('js')
    
</body>

</html>
