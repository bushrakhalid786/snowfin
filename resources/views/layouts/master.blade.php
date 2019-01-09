<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.css')}}">


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.rightsidebar')
    @include('layouts.footer')

</div>

<script src="{{ asset('/js/app.js')}}"></script>
</body>
</html>

