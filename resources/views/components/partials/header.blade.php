<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- Made by KACOU² Emmanuel --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ $title }} - Geniusntech</title>

    <link rel="icon" href="/favicon.ico" sizes="any">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
