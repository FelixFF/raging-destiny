@extends('layouts.app')

@section('content')
    <div id="contact" class="content-section-style contact">
        <div id="contact" class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Billy Twigg
                </div>
            </div>
            <div class="contact-content">
                <div class="image-content">
                    <img src="\img/content/contact-picture.jpg">
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="fa fa-facebook" target=”_blank”></a>
                        <a href="https://www.twitter.com/" class="fa fa-twitter" target=”_blank”></a>
                        <a href="https://www.youtube.com/channel/UCBqSsc0az9c9l-hUei0C8VQ" class="fa fa-youtube-play" target=”_blank”></a>
                    </div>
                </div>
                <div class="text-content">
                    <p class="inner-heading">
                        Writer, Illustrator and Creator of Raging Destiny.
                    </p>
                    <p>
                        Since the age of eleven, Billy has had a story to tell. The goal is to simply have his story printed in book form and standing side by side on his book shelf. If others happen to enjoy the story along the way, then that is a delightful bonus.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .contact {
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

        .contact-content {
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
            .contact {
                margin-top: -3em;
            }
        }
        @media only screen and (min-width: 600px) {
            .contact-content {
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
        }
    </style>
@endsection
