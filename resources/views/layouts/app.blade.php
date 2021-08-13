<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Raging Destiny</title>
    @livewireStyles
</head>
<body class="bg-gray-900 bg-fixed bg-no-repeat h-screen bg-contain bg-center items-center flex justify-center body-class">
    <div class="menu w-2/5">
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/news">
                <img src="{{ asset('/img/menu/menu-button-home.png') }}" alt="News Button">
            </a>
        </button>
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/history" >
                <img src="{{ asset('/img/menu/menu-button-history.png') }}" alt="History Button">
            </a>
        </button>
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/store">
                <img src="{{ asset('/img/menu/menu-button-store.png') }}" alt="Store Button">
            </a>
        </button>
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/library">
                <img src="{{ asset('/img/menu/menu-button-books.png') }}" alt="Library Button">
            </a>
        </button>
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/popCulturePauseScreen">
                <img src="{{ asset('/img/menu/menu-button-pcps.png') }}" alt="PCPS Button">
            </a>
        </button>
        <button class="w-1/6 p-1 m-2 min-w-1/4">
            <a href="/contact">
                <img src="{{ asset('/img/menu/menu-button-contact.png') }}" alt="Contact Button">
            </a>
        </button>
    </div>
    <div class="flex flex-col justify-center items-center w-2/4 content-style content" data-scroll-speed="9">
        @yield('content')
    </div>
@livewireScripts
</body>
</html>
