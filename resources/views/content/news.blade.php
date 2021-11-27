@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        <div class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png"
                     alt="Content Box Banner">
                <div class="header-image-text">
                    Raging Destiny (Standard Edition)
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
                                            <div class="inner-heading">
                                                {!! $news->sub_title !!}
                                            </div>
                                            <div class="box-container">
                                                <div class="image-content">
                                                    <img src="\img/content/book-cover-1.jpg">
                                                    <div class="image-label"><span class="pound-sign-m">£</span>10.00</div>
                                                    <div class="sub-label">(<span class="pound-sign-s">£</span>2.99 P&P)</div>
                                                </div>
                                                <div class="text-content" style="margin-top: 2em">
                                                    <div class="scrollable-content-sub-heading">
                                                        THE FIRST NOVEL IN THE RAGING DESTINY IS NOW ON SALE!
                                                    </div>
                                                    <p class="scrollable-content dynamic-container" style="max-height: 286px;">
                                                        {!! $news->content !!}
                                                    </p>
                                                </div>
                                                <div class="buttons-content">
                                                    <button class="button button-override text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">
                                                        <span class="optional-more-info-button">More Info</span>
                                                        <span class="optional-buy-now-button">Buy Now</span>
                                                    </button>
                                                </div>
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
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png"
                     alt="Content Box Banner">
                <div class="header-image-text">
                    Raging Destiny (Signature Edition)
                </div>
            </div>
            <div class="news-content">
                <div class="carousel">
                    {{--                    <button class="carousel__button carousel__button--left is-hidden">--}}
                    {{--                        <i class="fa fa-chevron-left" aria-hidden="true"></i>--}}
                    {{--                    </button>--}}
                    <div class="carousel__track-container">
                        <div class="carousel__track">
                            <div class="carousel__slide">
                                <div class="carousel__slide--content">
                                    <div class="inner-heading signature-edition">
                                        GET THE SIGNATURE EDITION!
                                    </div>
                                    <div class="box-container">
                                        <div class="image-content">
                                            <img src="\img/content/book-cover-1-hardback.jpg">
                                            <div class="image-label"><span class="pound-sign-m">£</span>22.00</div>
                                            <div class="sub-label">(<span class="pound-sign-s">£</span>2.99 P&P)</div>
                                        </div>
                                        <div class="text-content">
                                            <div class="scrollable-content-sub-heading">
                                                THE FIRST NOVEL IN THE RAGING DESTINY SERIES JUST GOT BETTER!
                                            </div>
                                            <div class="scrollable-content dynamic-container">
                                                <ul>
                                                    <li>- Hard Back cover.</li>
                                                    <li>- Dust sheet.</li>
                                                    <li>- Silver foil front cover.</li>
                                                    <li>- Larger A5 Print.</li>
                                                    <li>- Crisp White 80g pages.</li>
                                                    <li>- Larger margin indent.</li>
                                                    <li>- Signed by Author Billy Twigg</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="buttons-content">
                                            <button class="button button-override text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">
                                                <span class="optional-more-info-button">More Info</span>
                                                <span class="optional-buy-now-button">Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="news-content content-mid-box">
                {{--                <div class="carousel">--}}
                {{--                    <button class="carousel__button carousel__button--left is-hidden">--}}
                {{--                        <i class="fa fa-chevron-left" aria-hidden="true"></i>--}}
                {{--                    </button>--}}
                {{--                    <div class="carousel__track-container">--}}
                {{--                        <div class="carousel__track">--}}
                {{--                                    <div class="carousel__slide {{$key == 0 ? 'current-slide' : 'is-hidden' }}">--}}
                <div class="carousel__slide--content news-carousel">
                    <div class="text-content news-section text-content-news">
                        <div class="inner-heading-mid">
                            <p>
                                Expand your Raging Destiny experience today!
                            </p>
                        </div>
                        <p class="scrollable-content news-container">
                            Make your way over to the Raging Destiny Store to find the latest merchandise available now!
                            <br>
                            T-shirts, hoodies, art, bookmarks, puzzles, posters, you can find it all and show your
                            support for Raging Destiny!
                        </p>
                    </div>
                </div>
                <div style="position: relative; width: 100%; display: flex; align-items: center; justify-content: center">
                    <div class="buttons-content-news">
                        <button onclick="location.href = location.href.replace('news', 'store');" class="button button-override text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Merchandise</button>
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
            height: 210px;
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
        }

        .image-label {
            display: none !important;
        }

        .sub-label {
            display: none !important;
        }

        .header-image-container {
            max-height: 90%;
            max-width: 87.2%;
            transform: translate(-2.8%, 49%);
            position: relative;
            text-align: center;
            color: var(--title);
            font-size: 3vw;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .header-image-text {
            font-size: 16px;
            position: absolute;
            top: 24%;
            left: 14%;
            transform: translateY(-5%);
        }

        .header-image-container-mid {
            max-width: 55.2%;
            transform: translateY(76%);
            position: relative;
            z-index: 1;
        }

        .header-image-text-mid {
            position: absolute;
            right: 42%;
            top: 2px;
            text-align: center;
            font-size: 20px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            color: var(--title);
            transform: translateY(-5%);
        }

        .button-override {
            padding-top: 0.2rem !important;
            padding-bottom: 0.2rem !important;
        }

        .news-content {
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

        .content-mid-box {
            border-radius: 15px;
            position: relative;
            flex-direction: column;
        }

        .content-mid-box::after {
            content: "";
            width: 94.6%;
            height: 96%;
            border: 1px solid black;
            border-radius: 15px;
            position: absolute;
            transform: translate(-2%, -2%);
            z-index: 0;
        }

        .news-container {
            font-size: 8px !important;
        }

        .news-content.carousel__slide--content {

        }

        .inner-heading {
            font-size: 13px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            margin: 0.5em 0 1em 0;
            display: none;
        }

        .scrollable-content {
            height: 100%;
            overflow-y: auto;
            font-size: 7px;
        }

        .scrollable-content-sub-heading {
            margin-bottom: 1em;
            margin-top: -1em;
            font-size: 8px;
        }

        .text-content {
            max-width: 90%;
            margin: 1em;
            flex-direction: column;
            align-content: center;
            display: none;
        }

        .dynamic-container {
            height: 136px;
            text-align: left;
        }

        .image-content {
            min-width: 30%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .inner-heading-mid {
            font-size: 18px !important;
            font-style: italic;
            margin: 0 auto 3.5em auto;
            display: flex;
            flex-direction: row;
            max-height: 20%;
            font-family: 'EXCELSIOR SANS', serif;
            text-align: center;
            z-index: 2;
        }

        .inner-heading.signature-edition {
            font-size: 18px;
            margin-top: 1em !important;
            margin-bottom: 0.2em !important;
            transform: translateY(-40%);
        }

        .news-section {
            display: flex;
            justify-content: space-between !important;
        }

        .inner-logo {
            margin-top: 2em;
            margin-right: -2em;
        }

        .buttons-content {
            position: absolute;
            margin-top: 0.6em;
            bottom: 0;
            width: 92%;
            transform: translateY(25%);
        }

        .buttons-content-news {
            position: absolute;
            margin-top: 0.6em;
            bottom: 0;
            max-width: 93%;
            width: 100%;
            margin-bottom: 0.5em;
        }

        .pushable {
            background: #104977;
            border-radius: 4px;
            border: none;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
            min-width: 180px;
        }

        .front {
            display: block;
            min-width: 140px;
            border-radius: 4px;
            font-size: 0.8rem;
            background: #0e4068;
            color: white;
            transform: translateY(-6px);
        }

        .optional-buy-now-button {
            display: none;
        }

        .optional-more-info-button {
            display: block;
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
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            max-height: 70%;
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
        }

        .box-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            max-height: 80%;
        }

        .carousel__indicator.current-slide {
            background: rgba(14, 64, 104, 1);
        }

        i {
            font-size: 2em !important;
        }

        ul {
            font-size: 9px;
            margin: 2em 0 0 1em;
            width: 90%;
            overflow: hidden;
        }

        @media only screen and  (min-width: 400px) and (max-width: 599px) {

        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px) {
            .news {
                margin-top: -3em;
            }
        }

        @media only screen and (min-width: 600px) {
            ul {
                font-size: 18px;
                margin: 2em 0 0 1em;
                width: 100%;
                overflow-y: hidden;
            }

            .news-content {
                font-size: 1vw;
                max-width: 90%;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                height: 600px;
                width: 85%;
            }

            .news-container {
                font-size: 20px !important;
            }

            .text-content {
                max-width: 70%;
                display: block;
            }

            .text-content-news {
                max-width: 90% !important;
            }

            .header-image-container {
                max-width: 93.4%;
                left: -2.2%;
                transform: translateY(36%);
            }

            .header-image-container-mid {
                transform: translateY(58%);
                position: relative;
                text-align: center;
                color: var(--title);
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
                transform: translateY(0);
            }

            .header-image-text {
                font-weight: bolder;
                font-size: 43px;
                top: 25%;
                left: 14%;
                transform: translateY(2%);
            }

            .style-content-box {
                max-width: 40%;
                min-width: 45em;
            }

            .inner-heading {
                font-size: 39px;
                margin-bottom: 1em;
                display: block;
            }

            .inner-heading.signature-edition {
                font-size: 54px;
                margin-top: 0.2em !important;
                margin-bottom: 1.5em !important;
                transform: translateY(20%);
            }

            .inner-heading-mid {
                font-size: 47px !important;
                margin-bottom: 2em;
                margin-top: 1.5em;
            }

            .content-mid-box {
                flex-direction: column;
                justify-content: center;
            }

            .content-mid-box::after {
                display: none;
            }

            .dynamic-container {
                max-height: 100%;
                overflow: hidden;
            }

            .scrollable-content {
                height: 103%;
                overflow-y: auto;
                font-size: 16px;
            }

            .scrollable-content-sub-heading {
                margin-bottom: 1em;
                margin-top: -1em;
                font-size: 18px;
            }

            .buttons-content {
                position: absolute;
                margin-top: 0.6em;
                left: 0;
                bottom: -17px;
                width: 100%;
                transform: translateY(0);
            }

            .buttons-content-news {
            }

            .pushable {
                background: #104977;
                border-radius: 4px;
                border: none;
                padding: 0;
                cursor: pointer;
                outline-offset: 4px;
                min-width: 140px;
                width: 96%;
            }

            .front {
                display: block;
                min-width: 140px;
                border-radius: 4px;
                font-size: 1.25rem;
                background: #0e4068;
                color: white;
                transform: translateY(-6px);
            }

            .optional-buy-now-button {
                display: block !important;
            }

            .optional-more-info-button {
                display: none !important;
            }

            .pushable:active .front {
                transform: translateY(-2px);
            }

            .image-content {
                display: flex;
                min-width: 30%;
                font-family: "EXCELSIOR SANS", serif;
                font-style: italic;
                font-size: 32px;
                max-width: 36%;
                transform: translate(7%, 13%);
            }

            .image-content img {

            }

            .sub-label {
                font-size: 18px;
                display: block !important;
                margin-top: -1em;
            }

            .image-label {
                display: block !important;
            }

            .carousel__slide--content {
                height: 100%;
            }

            .carousel__slide {
                position: absolute;
            }

            .news-carousel {
                border: 1px solid #050966;
                border-radius: 15px;
                max-height: 100%;
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
