<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title)?$title:env('APP_NAME') }}</title>

    @include('admin.layouts.links')
    
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.navbar')
    @yield('content')

    
    @include('admin.layouts.footer')
    @include('admin.layouts.scripts')
    @include('admin.layouts.modal')
    
    
    @yield('js')
    
</body>

</html>
