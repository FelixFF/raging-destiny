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
                <p class="inner-heading">
                    Writer, Illustrator and Creator of Raging Destiny.
                </p>
{{--                <div style="display: flex; flex-direction: row; max-height: 70%">--}}
                    <div class="image-content">
                        <img src="\img/content/contact-picture.jpg">
                    </div>
                    <div class="text-content">
                        <p class="scrollable-content">
                            Since the age of eleven, Billy has had a story to tell. The goal is to simply have his story
                            printed in book form and standing side by side on his book shelf. If others happen to enjoy
                            the
                            story along the way, then that is a delightful bonus.
                        </p>
                    </div>
{{--                </div>--}}
                <div class="social-media">
                    <a href="mailto:billy.twigg@hotmail.co.uk" class="fa fa-envelope" target=”_blank”></a>
                </div>
            </div>
        </div>
        <div id="contact" class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Social Media
                </div>
            </div>
            <div class="contact-content social-media-content">
                <p class="inner-heading">
                    Be a part of Raging Destiny!
                </p>
                <div style="display: flex; flex-direction: row; max-height: 70%">
                    <div class="text-content">
                        <div class="title-w-logo">
                            <img src="\img/logos/logo-social.png">
                        </div>
                        <p class="scrollable-content">
                            If you would like to keep up to date with all the latest Raging Destiny news or share your
                            opinions on the product, there is no better place than the links below.
                            Look forward to hearing from you.
                        </p>
                    </div>
                </div>
                <div class="social-media-images">
                    <a href="https://www.facebook.com/RagingDestiny/" class="fa fa-facebook social-media-big-logos"
                       target=”_blank”></a>
                    <a href="https://twitter.com/ragingdestiny" class="fa fa-twitter social-media-big-logos"
                       target=”_blank”></a>
                    <a href="https://www.instagram.com/ragingdestiny/?hl=en-gb"
                       class="fa fa-instagram social-media-big-logos" target=”_blank”></a>
                </div>
            </div>
        </div>
        <div id="contact" class="content-section-style style-content-box">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    Pop Culture Pause Screen
                </div>
            </div>
            <div class="contact-content">
                <p class="inner-heading">
                    YouTube Content
                </p>
                <div style="display: flex; flex-direction: row; max-height: 70%">
                    <div class="image-content">
                        <img src="\img/logos/logo-pcps.png">
                    </div>
                    <div class="text-content" style="min-width: 60%">
                        <p class="scrollable-content">
                            In Bill’s spare time, he likes to play games, watch Anime and Cartoons and enjoys Pro
                            Wrestling.
                            If you do too, come say hi on YouTube and enjoy highlight videos, top 12 videos, talk shows,
                            reviews, talking points and more.
                        </p>
                    </div>
                </div>
                <div class="social-media">
                    <a href="https://www.youtube.com/channel/UCBqSsc0az9c9l-hUei0C8VQ" class="fa fa-youtube-play"
                       target=”_blank”></a>
                    <a href="https://www.instagram.com/bill_popculturepausescreen/" class="fa fa-instagram"
                       target=”_blank”></a>
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
            display: none;
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
            top: 24%;
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
            flex-direction: column-reverse;
            justify-content: space-between;
            height: 300px;
            width: 80%;
        }

        .social-media-content {
            flex-direction: column;
        }

        .social-media-content .text-content {
            display: flex;
            flex-direction: row;
        }

        .inner-heading {
            font-size: 18px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            margin: 0 0 1em 0;
        }

        .scrollable-content {
            height: 100%;
            overflow-y: auto;
            font-size: 9px;
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
        }

        .dynamic-container {
            height: 80px;
        }

        .image-content {
            min-width: 30%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            position: relative;
        }

        .inner-heading-mid {
            font-size: 24px;
            font-style: italic;
            margin: 1em auto 2em auto;
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

        .social-media {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
            font-size: 20px;
        }

        .social-media-images {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .social-media-big-logos {
            height: 100%;
        }

        a.social-media-big-logos {
            text-align: center;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title-w-logo img {
            display: none;
        }

        i {
            font-size: 2em !important;
        }

        @media only screen and (min-width: 400px) and (max-width: 599px) {
            .dynamic-container {
                height: 72px;
            }

            .inner-heading {
                margin-top: -0.7em;
            }

            .social-media-big-logos {
                width: 20%;
                height: 90%;
            }

            a.social-media-big-logos {
                font-size: 20px;
            }
        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px) {
            .contact {
                margin-top: -3em;
            }
        }

        @media only screen and (min-width: 600px) {
            .contact-content {
                font-size: 1vw;
                max-width: 90%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
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
                height: 500px;
            }

            .inner-heading {
                font-size: 36px;
                margin-bottom: 1em;
            }

            .social-media {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
            }

            .image-content img {
                display: block;
            }

            .dynamic-container {
                max-height: 100%;
            }

            .scrollable-content {
                height: 100%;
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
                bottom: 20px;
            }

            .image-content {
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                max-width: 30%;
                font-family: "EXCELSIOR SANS", serif;
                font-style: italic;
                font-size: 32px;
            }

            .title-w-logo {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                min-width: 44%;
            }

            .title-w-logo img {
                max-height: 48%;
                display: block;
            }

            .social-media-big-logos {
                width: 13%;
            }

            a.social-media-big-logos {
                font-size: 38px;
            }
        }

        .image-content img {
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
        }

        @supports (-webkit-text-stroke: 0.2px black) {
            .inner-heading {
                -webkit-text-stroke: 0.2px #0137ca;
                -webkit-text-fill-color: white;
            }
        }
    </style>
@endsection
