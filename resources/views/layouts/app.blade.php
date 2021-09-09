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
<body class="bg-gray-900 bg-fixed">
    <img src="{{ asset('/img/left-border.png') }}" class="border-image" alt="Border Left" style="left: 0"/>
    <img src="{{ asset('/img/right-border.png') }}" class="border-image" alt="Border Right" style="right: 0"/>

    @include('partials.menu')
    @include('partials.sub-header', ['subHeading' => $subHeading])
    <div class="flex flex-col justify-center items-center content-style" data-scroll-speed="9">
        @yield('content')
    </div>
@livewireScripts
</body>
</html>
