@extends('layouts.app')

@section('content')
    <div id="contact" class="content-section-style">
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
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube-play"></a>
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
            color: #0236ca;
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

        .contact-content {
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
        }

        .image-content {
            margin: 1em;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .social-media {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .social-media a {
            margin: 1em;
        }

        .inner-heading {
            font-size: 2vw;
            font-weight: bolder;
            margin-bottom: 2em;
        }

        @supports (-webkit-text-stroke: 0.2px black) {
            .inner-heading {
                -webkit-text-stroke: 0.2px #0137ca;
                -webkit-text-fill-color: white;
            }
        }
    </style>
@endsection
