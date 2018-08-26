@include('layouts.header')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "csrf-token" content = "{{ @csrf_token }}">

    <meta property="og:locale" content="ja_JP" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="LinLink" />
    <meta property="og:description" content="お気に入りのリンクをシェアしよう" />
    <meta property="og:url" content="http://nus3.moo.jp/linlink/public" />
    <meta property="og:site_name" content="LinLink" />
    <meta property="og:image" content="{{ asset('/img/ogp.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary large image" />
    <meta name="twitter:description" content="お気に入りのリンクをシェアしよう" />
    <meta name="twitter:title" content="LinLink" />
    <meta name="twitter:site" content="@YotaHada3" />
    <meta name="twitter:image" content="{{ asset('/img/ogp.png') }}" />
    <meta name="twitter:creator" content="@YotaHada3" />

    <link rel="icon" href="{{ asset('/img/logo.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('/css/vendor/materialize.min.css') }}" type="text/css" rel="stylesheet"/>
    <!-- <link href="/css/vendor/materialize.min.css" type="text/css" rel="stylesheet"/> -->
    <link href="{{ asset('/css/base.css') }}" type="text/css" rel="stylesheet"/>
    @yield('pageCss')
    <title>linlink</title>
</head>
<body>
    @yield('header')
    @yield('content')


    <script type="text/javascript" src="{{ asset('/js/vendor/jquery3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/moveTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/common.js') }}"></script>
    @yield('footer')
</body>
</html>