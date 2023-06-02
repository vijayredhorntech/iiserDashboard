<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IISER-Dashboard</title>

     @include('common.style')
</head>
<body>

@yield('main')

<x-common.navbar/>

<x-common.sidebar/>

@include('common.script')

</body>
</html>
