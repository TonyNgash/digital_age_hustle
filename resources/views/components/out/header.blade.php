<!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/menu.js')
    {{--  @vite('resources/js/overlay.js')  --}}
    {{--  <link rel="stylesheet" href="{{ asset('assets/fonts/line_awesome/css/line-awesome.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/line_awesome/css/line-awesome.min.css') }}">
    @vite('resources/js/alpine.js')
</head>
<body class="bg-gray-100">
    <div class="dark-overlay hidden md:hidden w-full h-full absolute bg-black bg-opacity-50 z-40"></div>



