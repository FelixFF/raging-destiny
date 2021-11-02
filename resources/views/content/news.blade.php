@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        {{--        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))--}}
        <div id="news" class="content-section-style style-content-box">
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
                    <p class="inner-heading">
                        EVERYONE HAS A STYLE OF FIGHTING, BUT NOT EVERYONE CAN FIGHT WITH STYLE!
                    </p>
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
            display: flex;
            flex-direction: column;
            max-width: 60%;
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

        .text-content {
            max-width: 50%;
            margin: 1em;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: space-between;
        }

        .image-content {
            margin: 1em;
        }

        .buttons-content {

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

        .inner-heading {
            font-size: 1.8vw;
            font-weight: bolder;
            margin-bottom: 1em;
        }

        @supports (-webkit-text-stroke: 0.2px black) {
            .inner-heading {
                -webkit-text-stroke: 0.2px #0137ca;
                -webkit-text-fill-color: white;
            }
        }
    </style>
@endsection
