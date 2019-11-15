<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', (!request()->is('/') && isset($title)) ? sprintf('%s | %s', $title, config('app.name')): config('app.name'))</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <link rel="sitemap" type="application/xml" href="{{ url('sitemap.xml') }}" title="Sitemap" />
</head>
<body id="body-{{ $slug }}">

<div id="wrapper" class="container">
    @include('partials.header')

    <article id="content">
        @yield('content')
    </article>

    @include('partials.footer')
</div>

<script async defer src="{{ mix('js/app.js') }}" type="application/javascript"></script>
</body>
</html>
