@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        {{--        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))--}}
        <div class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png"
                     alt="Content Box Banner">
                <div class="header-image-text">
                    Available Now!
                </div>
            </div>
            <div class="news-content">
                <div class="carousel">
{{--                    <button class="carousel__button carousel__button--left is-hidden">--}}
{{--                        <i class="fa fa-chevron-left" aria-hidden="true"></i>--}}
{{--                    </button>--}}
                    <div class="carousel__track-container">
                        <div class="carousel__track">
                            @foreach($allNews as $key => $news)
                                @if (str_contains($news->main_title, 'Available'))
                                    <div class="carousel__slide {{$key == 0 ? 'current-slide' : 'is-hidden' }}">
                                        <div class="carousel__slide--content">
                                            <div class="image-content">
                                                <img src="\img/content/book-cover-1.jpg">
                                                <p>£15 (P&P included)</p>
                                            </div>
                                            <div class="text-content">
                                                <div class="inner-heading"
                                                    style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                                                    {{ $news->sub_title }}
                                                </div>
                                                <div class="scrollable-content-sub-heading">The first novel in the Raging Destiny series is now on sale!</div>
                                                <p class="scrollable-content">
                                                    {{ $news->content }}
                                                    <span id="book-preview" style="font-weight: bold"
                                                          onclick="#">More...</span>
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
                                @endif
                            @endforeach
                        </div>
                    </div>

{{--                    <button class="carousel__button carousel__button--right">--}}
{{--                        <i class="fa fa-chevron-right" aria-hidden="true"></i>--}}
{{--                    </button>--}}

                    <div class="carousel__nav">
                        @foreach($allNews as $key => $news)
                            @if (str_contains($news->main_title, 'Available'))
                                <button class="carousel__indicator current-slide {{$key == 0 ? 'current-slide' : '' }}"></button>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div><div class="content-section-style style-content-box">
            <div class="header-image-container-mid">
                <img class="header-image" src="\img/mid-banner.png"
                     alt="Content Box Banner">
                <div class="header-image-text-mid">
                    News
                </div>
            </div>
            <div class="news-content" style="border-radius: 15px">
{{--                <div class="carousel">--}}
{{--                    <button class="carousel__button carousel__button--left is-hidden">--}}
{{--                        <i class="fa fa-chevron-left" aria-hidden="true"></i>--}}
{{--                    </button>--}}
{{--                    <div class="carousel__track-container">--}}
{{--                        <div class="carousel__track">--}}
{{--                                    <div class="carousel__slide {{$key == 0 ? 'current-slide' : 'is-hidden' }}">--}}
                                        <div class="carousel__slide--content">
                                            <div class="text-content">
                                                <div class="inner-heading-mid">
                                                    Raging Destiny Available Now!
                                                </div>
                                                <p class="scrollable-content">
                                                    A brand new adventure from writer Billy Twigg is now available to buy. Own your very own copy of this new Martial Arts Fantasy Fiction and let RagingDestiny.com know what you thought!
                                                    More exciting details to follow, so make your way over to RagingDestiny.com/Contact to join your choice of social media and check back with RD.com again soon.
                                                </p>
                                            </div>
                                        </div>
{{--                                    </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button class="carousel__button carousel__button--right">--}}
{{--                        <i class="fa fa-chevron-right" aria-hidden="true"></i>--}}
{{--                    </button>--}}

{{--                    <div class="carousel__nav">--}}
{{--                        @foreach($allNews as $key => $news)--}}
{{--                            @if (str_contains($news->main_title, 'Available') == false)--}}
{{--                                <button class="carousel__indicator current-slide {{$key == 0 ? 'current-slide' : '' }}"></button>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <style>
        .news {
            display: flex;
            flex-direction: column;
        }

        .style-content-box {
            display: flex;
            flex-direction: column;
        }

        .image-content img {
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
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

        .news-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 3vw;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            height: 600px;
            width: 100%;
        }

        .inner-heading {
            font-size: 6vw;
            font-weight: bolder;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .scrollable-content {
            height: 100%;
            overflow-y: auto;
            /*border: 1px #050966 solid;;*/
        }

        .scrollable-content-sub-heading {
            margin-bottom: 1em;
            margin-top: -1em;
        }

        @media only screen and (min-width: 58em) {
            .news-content {
                border: 2px #050966 solid;
                padding: 10px;
                background: #cbdbef;
                font-size: 1vw;
                max-width: 90%;
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
                margin: 0 1em 1em 1em;
            }
        }

        .text-content {
            /*max-width: 60%;*/
            margin: 1em;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: space-between;
        }

        .image-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 30%;
            font-size: 42px;
            font-weight: bolder;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .header-image-container-mid {
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

        .header-image-text-mid {
            position: absolute;
            top: 12%;
            right: 42%;
            text-align: center;
        }

        .inner-heading-mid {
            font-size: 8vh;
            font-style: italic;
            margin-bottom: 2em;
            margin-left: 1.65em;
            display: flex;
            flex-direction: row;
            /*max-width: 80%;*/
            max-height: 20%;
            font-family: 'EXCELSIOR SANS',serif
        }

        .inner-logo {
            margin-top: 2em;
            margin-right: -2em;
        }

        .buttons-content {
            margin-top: 0.6em;
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

            .inner-heading-mid {
                -webkit-text-stroke: 0.2px #0137ca;
                -webkit-text-fill-color: white;
            }
        }
    </style>
@endsection
