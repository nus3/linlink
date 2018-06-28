<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "csrf-token" content = "{{ @csrf_token }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/vendor/materialize.min.css" type="text/css" rel="stylesheet"/>
    <link href="/css/base.css" type="text/css" rel="stylesheet"/>
    @yield('pageCss')
    <title>linlink</title>
</head>
<body>
    @yield('header')
    @yield('content')


    <script type="text/javascript" src="/js/vendor/jquery3.3.1.js"></script>
    <script type="text/javascript" src="/js/vendor/materialize.min.js"></script>
    @yield('footer')
</body>
</html>