<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Raging Destiny</title>
    @livewireStyles
</head>
<body class="bg-gray-900 bg-fixed" style="position: relative">
    <img src="{{ asset('/img/left-border.png') }}" class="border-image" alt="Border Left" style="left: 0"/>
    <img src="{{ asset('/img/right-border.png') }}" class="border-image" alt="Border Right" style="right: 0"/>

    @include('partials.menu')
    @include('partials.sub-header', ['subHeading' => $subHeading])
    <div class="flex flex-col justify-center items-center content-style" data-scroll-speed="9">
        @yield('content')
    </div>
    <footer style="position:absolute; bottom: 0; width: 100%; min-width: 30px; margin-top:2em; background: rgba(0,0,0, .2)">Copyright @Raging Destiny</footer>
    @livewireScripts
    @livewire('livewire-ui-modal')
</body>
</html>
