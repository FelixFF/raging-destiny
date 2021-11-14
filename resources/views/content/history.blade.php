@extends('layouts.app')

@section('content')
    <div id="history" class="content-section-style style-content-box history-browser">
        <div class="header-image-container">
            <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
            <div class="header-image-text">
                History
            </div>
        </div>
        <div class="history-content">
            @foreach($histories as $history)
                <div class="history-folder">
                    <img src="\img/folder-icon.png" alt="Folder image"/>
                    <span>{{ $history }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .history-browser {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            max-width: 60%;
        }

        .history-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 1vw;
            width: 90%;
            min-height: 32em;
            max-height: 600px;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
        }

        .header-image {
        }

        .header-image-container {
            max-width: 99.4%;
            transform: translate(-2.8%, 30%);
            position: relative;
            text-align: center;
            color: #0137ca;
            font-size: 3vw;
            font-weight: bold;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .header-image-text {
            position: absolute;
            top: 32%;
            left: 14%;
        }

        .history-folder {
            width: 25%;
            height: 25%;
            margin: 1em;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }
    </style>
@endsection
