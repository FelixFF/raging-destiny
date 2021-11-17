@extends('layouts.app')

@section('content')
    <div class="history">
        <div id="history" class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    History
                </div>
            </div>
            <div class="history-content">
                @foreach($histories as $history)
                    <div class="history-folder" onclick='Livewire.emit("openModal", "history-modal", @json(['titleOfHistory' => $history]))'>
                        <img src="\img/folder-icon.png" alt="Folder image"/>
                        <span>{{ $history }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .history {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 94%;
        }

        .style-content-box {
            display: flex;
            flex-direction: column;
            width: 18em;
            min-width: 270px;
        }

        .image-content img {
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
        }

        .header-image-container {
            max-height: 90%;
            max-width: 87.2%;
            transform: translate(-2.8%, 49%);
            position: relative;
            text-align: center;
            color: #0137ca;
            font-size: 3vw;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            z-index: 1;
        }

        .header-image-text {
            font-size: 16px;
            position: absolute;
            top: 24%;
            left: 14%;
        }

        .history-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 8px;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;
            height: 300px;
            width: 80%;
        }

        i {
            font-size: 2em !important;
        }

        /*.history-content:before {*/
        /*     content: "";*/
        /*     !*border: 1px #050966 solid;*!*/
        /*     border: 1px red solid;*/
        /*     border-top: none;*/
        /*     border-radius: 15px;*/
        /*     height: 88%;*/
        /*     width: 44.5%;*/
        /*     position: absolute;*/
        /*     transform: translateY(-2%);*/
        /*     z-index: 0;*/
        /* }*/

        @media only screen and (max-width: 599px) {
            /*.history-content:before {*/
            /*    content: "";*/
            /*    !*border: 1px #050966 solid;*!*/
            /*    border: 1px red solid;*/
            /*    border-top: none;*/
            /*    border-radius: 15px;*/
            /*    height: 86%;*/
            /*    width: 73%;*/
            /*    position: absolute;*/
            /*    transform: translate(-1%, -5%);*/
            /*    z-index: 0;*/
            /*}*/
        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px) {
            .history {
                margin-top: -3em;
            }
        }

        @media only screen and (min-width: 600px) {
            .history-content {
                font-size: 18px;
                max-width: 90%;
                display: flex;
                flex-direction: row;
                height: 600px;
                width: 85%;
            }

            .header-image-container {
                max-width: 92.6%;
                left: -2.2%;
                transform: translateY(38%);
            }

            .header-image-text {
                font-weight: bolder;
                font-size: 48px;
                top: 25%;
                left: 14%;
                transform: translateY(-2%);
            }

            .style-content-box {
                max-width: 40%;
                min-width: 45em;
            }
        }

        .history-folder {
            width: 25%;
            height: 40%;
            margin: 1em;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }
    </style>
@endsection
