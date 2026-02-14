<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="author" content="AeroLidz">
        <meta name="theme-color" content="#f96601">
        <link rel="canonical" href="{{ url()->current() }}">

        <title inertia>{{ config('app.name', 'AeroLidz') }}</title>

        {{-- Default OG / Twitter tags (overridden per-page via Inertia Head) --}}
        <meta property="og:site_name" content="AeroLidz">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@aerolidz">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-rubik antialiased bg-white text-dark">
        @inertia
    </body>
</html>
