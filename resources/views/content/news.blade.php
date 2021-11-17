@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
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
                                                <p>£15</p>
                                                <p>(P&P included)</p>
                                            </div>
                                            <div class="text-content">
                                                <div class="inner-heading"
                                                     style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                                                    {{ $news->sub_title }}
                                                </div>
                                                <div class="scrollable-content-sub-heading">The first novel in the
                                                    Raging Destiny series is now on sale!
                                                </div>
                                                <p class="scrollable-content">
                                                    {{ $news->content }}
                                                    <span id="book-preview" style="font-weight: bold"
                                                          onclick="#">More...</span>
                                                </p>
                                            </div>
                                            <div class="buttons-content" style="position: absolute; bottom: 0">
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

                {{--                    <div class="carousel__nav">--}}
                {{--                        @foreach($allNews as $key => $news)--}}
                {{--                            @if (str_contains($news->main_title, 'Available'))--}}
                {{--                                <button--}}
                {{--                                    class="carousel__indicator current-slide {{$key == 0 ? 'current-slide' : '' }}"></button>--}}
                {{--                            @endif--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
            </div>
        </div>
        <div class="content-section-style style-content-box">
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
                <div class="carousel__slide--content" style="border: 1px solid #050966; border-radius: 15px;">
                    <div class="text-content">
                        <div class="inner-heading-mid">
                            <p>
                                Raging Destiny Available Now!
                            </p>
                        </div>
                        <p class="scrollable-content">
                            A brand new adventure from writer Billy Twigg is now available to buy. Own your very own
                            copy of this new Martial Arts Fantasy Fiction and let RagingDestiny.com know what you
                            thought!
                            More exciting details to follow, so make your way over to RagingDestiny.com/Contact to join
                            your choice of social media and check back with RD.com again soon.
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
    <style>
        .news {
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
        }

        .header-image-text {
            font-size: 16px;
            position: absolute;
            top: 25%;
            left: 14%;
        }

        .header-image-container-mid {
            max-width: 55.2%;
            transform: translateY(76%);
            position: relative;
        }

        .header-image-text-mid {
            position: absolute;
            right: 42%;
            /*transform: translateY(-106%);*/
            top: 3px;
            text-align: center;
            font-size: 20px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            color: #0137ca;
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
            height: 300px;
            width: 80%;
        }

        .news-content.carousel__slide--content {

        }

        .inner-heading {
            font-size: 20px;
            /*font-weight: bolder;*/
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .scrollable-content {
            height: 100%;
            overflow-y: auto;
            font-size: 14px;
            /*border: 1px #050966 solid;;*/
        }

        .scrollable-content-sub-heading {
            margin-bottom: 1em;
            margin-top: -1em;
            font-size: 10px;
        }


        .text-content {
            max-width: 90%;
            margin: 1em;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
        }

        .image-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 30%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .inner-heading-mid {
            font-size: 24px;
            font-style: italic;
            margin: 0 auto 2em auto;
            display: flex;
            flex-direction: row;
            /*max-width: 80%;*/
            max-height: 20%;
            font-family: 'EXCELSIOR SANS', serif;
            text-align: center;
            max-width: 80%;
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
            min-width: 220px;
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

        .carousel {
            position: relative;
            width: 100%;
            margin: 0 auto;
            border: 1px solid #050966;
            border-top: none;
            border-radius: 0 0 15px 15px;
        }

        .carousel__slide {
            align-items: center;
            position: absolute;
            width: 90%;
            top: 0;
            bottom: 0;
        }

        .carousel__track-container {
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .carousel__track {
            padding: 0;
            margin: 0;
            list-style: none;
            position: absolute;
            height: 96.2%;
            width: 100%;
            transition: transform 250ms ease-in;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel__button {
            position: absolute;
            top: 50%;
            height: 4em;
            transform: translateY(-140%);
        }

        .carousel__button--left {
            left: -45px;
        }

        .carousel__button--right {
            right: -45px;
        }

        .carousel__slide--content {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .carousel__nav {
            /*background: #cbdbef;*/
        }

        .carousel__indicator {
            border: 0;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            background: white;
            /*transform: translateY(4em);*/
        }

        .carousel__indicator.current-slide {
            background: rgba(14, 64, 104, 1);
        }

        i {
            font-size: 2em !important;
        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px){
            .news {
                margin-top: -3em;
            }
        }
        @media only screen and (min-width: 600px) {
            .news-content {
                font-size: 1vw;
                max-width: 90%;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                height: 600px;
                width: 85%;
            }

            .header-image-container {
                max-width: 92.6%;
                left: -2.2%;
                transform: translateY(38%);
            }

            .header-image-container-mid {
                transform: translateY(58%);
                position: relative;
                text-align: center;
                color: #0137ca;
                font-size: 48px;
                font-weight: bold;
                font-family: "EXCELSIOR SANS", serif;
                font-style: italic;
                max-width: 60.4%;
                padding: 15px;
            }

            .header-image-text-mid {
                position: absolute;
                right: 42%;
                top: 22%;
                text-align: center;
                font-size: 48px;
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

            .inner-heading {
                font-size: 2.1vw;
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
                font-size: 32px;
            }

            .image-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-width: 30%;
                font-family: "EXCELSIOR SANS", serif;
                font-style: italic;
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
