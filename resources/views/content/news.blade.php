@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        {{-- <div class="container">
            <img class="top-left-image" src="\img/content/box-banner.png" alt="News Banner">
            <h1 class="top-left-text">
                News
            </h1>
        </div> --}}
        <section class="border-2 border-solid bg-gray-700 news-section">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Feugiat nibh sed pulvinar proin gravida hendrerit lectus. Urna porttitor rhoncus
            dolor purus non enim. Urna nec tincidunt praesent semper feugiat. Tellus integer feugiat scelerisque
            varius. Adipiscing elit pellentesque habitant morbi. Amet mattis vulputate enim nulla aliquet. Ut tortor
            pretium viverra suspendisse. Orci ac auctor augue mauris augue neque gravida in fermentum. In aliquam
            sem fringilla ut morbi tincidunt augue.
        </section>
    </div>
    <style>
        .news {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            max-width: 80%
        }

        .news-section {
            /* max-width: 90%; */
        }

        .container {
            position: relative;
            text-align: center;
            color: white;
            padding: 0 30px;
            transform: translate(-70px, -68px);
        }

        .top-left-text {
            position: fixed;
            color: darkblue;
            font-size: 2em;
            font-weight: bold;
            position: absolute;
            top: 4px;
            left: 6px;
            padding:25px;
        }

        .top-left-image {
            position: fixed;
            top: 0;
            left: 0;
        }
    </style>
@endsection
