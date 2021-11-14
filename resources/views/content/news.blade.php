@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        {{--        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))--}}
        <div class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Billy Twigg
                </div>
            </div>
            <div class="news-content">
                <div class="image-content">
                    <img src="\img/content/book-cover-1.jpg">
                </div>
                <div class="text-content">
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                        <p class="inner-heading">
                            EVERYONE HAS A STYLE OF FIGHTING,
                        </p>
                        <p class="inner-heading" style="margin-top: -1em">
                            BUT NOT EVERYONE CAN FIGHT WITH STYLE!
                        </p>
                    </div>
                    <p>
                        The first novel in the Raging Destiny novel series is now on sale!
                        Read the adventures of Slider, Gwendolyn, Raygan and Crystal as they travel the world of Gaia
                        and defend the people of Sanctuary City.
                        <span id="book-preview" style="font-weight: bold" onclick="#">More...</span>
                    </p>
                    <div class="buttons-content">
                        <button class="pushable">
                              <span class="front">
                                Buy Now
                              </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .style-content-box {
            /*min-width: 100% !important;*/
            /*max-width: 100% !important;*/
            display: flex;
            flex-direction: column;
        }

        .header-image {
            /* position: relative; */
        }

        .header-image-container {
            max-width: 88.6%;
            /* transform: translate(-37.8%, 28%); */
            transform: translate(-2.9%, 30%);
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
            top: 29%;
            left: 14%;
        }

        .news-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 3vw;
            max-width: 80%;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .inner-heading {
            font-size: 6vw;
            font-weight: bolder;
            margin-bottom: 0.5em;
            font-family: "EXCELSIOR SANS", serif;
        }

        @media only screen and (min-width: 58em){
            .news-content {
                border: 2px #050966 solid;
                padding: 10px;
                background: #cbdbef;
                font-size: 1vw;
                max-width: 80%;
                color: #0137ca;
                font-weight: bold;
                text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
                1px 2px 2px rgba(16, 16, 16, 0.2);
                border-radius: 0 0 15px 15px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .inner-heading {
                font-size: 2.1vw;
                font-weight: bolder;
                margin-bottom: 1em;
            }

            .pushable {
                background: #104977;
                border-radius: 4px;
                border: none;
                padding: 0;
                cursor: pointer;
                outline-offset: 4px;
                min-width: 140px;
            }

            .front {
                display: block;
                min-width: 140px;
                border-radius: 4px;
                font-size: 1.25rem;
                /*text-align: left;*/
                background: #0e4068;
                color: white;
                transform: translateY(-6px);
            }

            .pushable:active .front {
                transform: translateY(-2px);
            }

            .image-content {
                margin: 1em;
            }
        }

        .text-content {
            max-width: 60%;
            margin: 1em;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: space-between;
        }

        .image-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons-content {
            margin-top: 1.2em;
        }

        .pushable {
            background: #104977;
            border-radius: 4px;
            border: none;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
            min-width: 140px;
        }

        .front {
            display: block;
            min-width: 140px;
            border-radius: 4px;
            font-size: 1.25rem;
            /*text-align: left;*/
            background: #0e4068;
            color: white;
            transform: translateY(-6px);
        }

        .pushable:active .front {
            transform: translateY(-2px);
        }

        @media only screen and (min-width: 58em) {
            .style-content-box {

                max-width: 60%;
            }
        }

        @supports (-webkit-text-stroke: 0.2px black) {
            .inner-heading {
                -webkit-text-stroke: 0.2px #0137ca;
                -webkit-text-fill-color: white;
            }
        }
    </style>
@endsection
