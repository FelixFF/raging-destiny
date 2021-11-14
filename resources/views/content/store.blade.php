@extends('layouts.app')

@section('content')
    <div id="store" class="content-section-style store">
        <div class="store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Art-Cards
                </div>
            </div>
            <div class="store-content">
                <img class="store-image" src="\img/store/art.png" alt="Content Box Banner">
            </div>
        </div>

        <div class="store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    T-Shirts
                </div>
            </div>
            <div class="store-content">
                <img class="store-image" src="\img/store/blue-t-no-text.jpg" alt="Content Box Banner">
            </div>
        </div>

        <div class="store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Hoodies
                </div>
            </div>
            <div class="store-content">
                <img class="store-image" src="\img/store/black-hoodie.jpg" alt="Content Box Banner">
            </div>
        </div>

        <div class="store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Bookmark
                </div>
            </div>
            <div class="store-content">
                <img class="store-image other-merch" src="\img/store/bookmark-a-side.jpg" alt="Content Box Banner">
                <img class="store-image" src="\img/store/bookmark-b-side.jpg" alt="Content Box Banner">
            </div>
        </div>
    </div>
    <style>
        .store {
            display: flex;
            flex-direction: row;
             justify-content: space-evenly;
            /*justify-content: center;*/
            align-items: center;
            flex-wrap: wrap;
            margin: 5%;
        }

        .store-image {
            z-index: 0;
            /*max-width: 35%;*/
            cursor: pointer;
            max-height: 400px;
        }

        .store-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 0.8vw;
            width: 90%;
            min-height: 32em;
            max-height: 300px;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .header-image-container {
             max-width: 99.2%;
             transform: translate(-7.5%, 30%);
             position: relative;
             text-align: center;
             color: #0137ca;
             font-size: 2.3vw;
             font-weight: bold;
             font-family: "EXCELSIOR SANS", serif;
             font-style: italic;
         }

        .header-image-text {
            position: absolute;
            top: 27%;
            left: 14%;
        }

        .store-thumbnail {
            max-height: 25em !important;
        }

        .store-container {
            max-width: 40%;
        }

        .other-merch {
            margin: 0 2em;
        }
    </style>
@endsection
