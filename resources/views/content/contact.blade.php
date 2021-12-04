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
                <div class="box-content">
                    <img class="image-content bio-image" src="\img/content/contact-picture.jpg" alt="Billy's photo">
                    <div class="scrollable-content bio-content">
                        Since the age of eleven, Billy has had a story to tell. The goal is to simply have his story
                        printed in book form and standing side by side on his book shelf. If others happen to enjoy
                        the
                        story along the way, then that is a delightful bonus.
                    </div>
                </div>
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
            <div class="contact-content">
                <p class="inner-heading">
                    Be a part of Raging Destiny!
                </p>
                <div class="box-content socials">
                    <img class="image-content logo-socials" src="\img/logos/logo-social.png" alt="Raging Destiny Logo">
                    <div class="scrollable-content">
                        If you would like to keep up to date with all the latest Raging Destiny news or share your
                        opinions on the product, there is no better place than the links below.
                        Look forward to hearing from you.
                    </div>
                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/RagingDestiny/" class="fa fa-facebook"
                       target=”_blank”></a>
                    <a href="https://twitter.com/ragingdestiny" class="fa fa-twitter"
                       target=”_blank”></a>
                    <a href="https://www.instagram.com/ragingdestiny/?hl=en-gb"
                       class="fa fa-instagram" target=”_blank”></a>
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
                <div class="box-content">
                    <img class="image-content bio-image" src="\img/logos/logo-pcps.png" alt="YouTube Logo">
                    <div class="scrollable-content bio-content">
                        In Bill’s spare time, he likes to play games, watch Anime and Cartoons and enjoys Pro
                        Wrestling.
                        If you do too, come say hi on YouTube and enjoy highlight videos, top 12 videos, talk shows,
                        reviews, talking points and more.
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

        .box-content {
        }

        .image-content {
            float: left;
            max-width: 20%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            position: relative;
            border-radius: 50%;
            shape-outside: circle(50%);
            /*margin-right: 2rem;*/
        }

        .logo-socials {
            max-width: 30%;
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
            z-index: 2;
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
            flex-direction: column;
            justify-content: space-between;
            height: 255px;
            width: 80%;
            position: relative;
        }

        .contact-content::after {
            content: "";
            width: 94.6%;
            height: 96%;
            border: 1px solid black;
            border-top: none;
            border-radius: 0 0 15px 15px;
            position: absolute;
            transform: translate(-2%, -2%);
            z-index: 0;
        }

        .inner-heading {
            font-size: 18px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            margin: 1em 0 0.5em 0;
        }

        .scrollable-content {
            height: 100%;
            font-size: 9px;
        }

        .social-media {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
            font-size: 13px;
            z-index: 2;
        }

        i {
            font-size: 2em !important;
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
                position: relative;
                padding-bottom: 5px;
            }

            .contact-content::after {
                content: "";
                width: 96.6%;
                height: 100%;
                border: 1px solid black;
                border-top: none;
                border-radius: 0 0 15px 15px;
                position: absolute;
                transform: translateY(-2%);
            }

            .header-image-container {
                max-width: 92.6%;
                left: -2.2%;
                transform: translateY(38%);
                z-index: 2;
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
                height: 670px;
                margin-bottom: 1em;
            }

            .box-content {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 60%;
                margin-bottom: 1em;
            }

            .inner-heading {
                font-size: 48px;
                margin-bottom: 1em;
            }

            .social-media {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                margin-bottom: 0.7em;
            }

            .socials {
                margin-top: 3em;
            }

            .logo-socials {
                transform: translateY(-40%);
                max-height: 4em;
            }

            .scrollable-content {
                height: 100%;
                overflow-y: auto;
                font-size: 16px;
                max-width: 60%;
                margin-top: 0.8em;
            }

            .image-content {
                float: left;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                height: 90%;
                max-width: 39%;
                font-family: "EXCELSIOR SANS", serif;
                font-style: italic;
                font-size: 32px;
                border-radius: 0;
                margin-right: 5px;
            }

            .bio-image {
                width: 220px;
                height: 220px;
            }

            .bio-content {
                transform: translateY(7%);
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
