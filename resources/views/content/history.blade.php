@extends('layouts.app')

@section('content')
    <div class="history-browser">
{{--        <span class="chevron left"><</span>--}}
{{--        @foreach()--}}

{{--        @endforeach--}}
        <div id="history" class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    History
                </div>
            </div>
            <div class="contact-content">
                @foreach($histories as $history)
                    {{ File::glob(public_path('img/menu') . '/folder-icon.png') }}
                @endforeach
            </div>
        </div>
{{--        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))--}}
{{--        @livewire('content-box', ['title' => $contentBoxTitle1, 'content' => $contentBoxContent1], key($user->id))--}}
{{--        @livewire('content-box', ['title' => $contentBoxTitle2, 'content' => $contentBoxContent2], key($user->id))--}}
{{--        <span class="chevron right">></span>--}}
    </div>
    <style>
        .history-browser {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .chevron {
            font-size: 70px;
            font-weight: bolder;
            color: red;
            position: relative;
        }

        /* .chevron.left {
            margin-right : -10em;
        }

        .chevron.right {
            margin-left: -10em;
        } */
    </style>
@endsection
