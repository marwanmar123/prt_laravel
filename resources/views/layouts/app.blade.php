<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="img/logo.png" rel="shortcut icon" />

    <title> @yield('title')</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Dancing+Script:wght@600;700&family=Russo+One&display=swap"
        rel="stylesheet">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://kit.fontawesome.com/3cfa8bb33f.js" crossorigin="anonymous"></script>
    

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    
</head>

<body class="h-24 bg-gradient-to-r from-black via-gray-500 to-black">
    @guest
        
    
    {{-- @if(!guest() --}}
    @include('layouts.sidebar')
    @else
    <nav class="flex fixed h-full md:flex-col md:p-4 p-0 bg-gray-800 w-10 md:w-24 ">
        <img src="img/logo.png" class="w-1/4 md:w-2/3">
        <div class="flex flex-col items-center">
            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="text-gray-200 hover:text-teal-400 p-4 m-3 text-sm md:text-lg fas fa-sign-out-alt icon"
                    data-hover="logout"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>

            
        </div>
    </nav>
    
    @endguest


<div id="app">
    
    

    @yield('content')
    
</div>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
