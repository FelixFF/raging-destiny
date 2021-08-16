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
<body class="bg-gray-900 bg-fixed bg-no-repeat h-screen bg-contain bg-center">
    <img src="{{ asset('/img/main-background-border-left.png') }}" alt="Border Left" style="position: fixed; left:0; height: 100vh; max-width: 3rem"/>
    <img src="{{ asset('/img/main-background-border-right.png') }}" alt="Border Right" style="position: fixed; right: 0; height: 100vh; max-width: 3rem"/>

    @include('partials.menu')
    <div class="flex flex-col justify-center items-center content-style" data-scroll-speed="9">
        @yield('content')
    </div>
@livewireScripts
</body>
</html>
