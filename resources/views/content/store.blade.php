@extends('layouts.app')

@section('content')
    <div id="store" class="content-section-style store">
        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('Raging Destiny: Standard Edition')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/content/book-cover-1.jpg" alt="Content Box Banner">
                </div>
                <div class="merch-label">Art: <span class="pound-sign">£</span>10.00 (<span class="pound-sign">£</span>2.99 P&P)</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251724807', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>

        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('Raging Destiny: Signature Edition')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/content/book-cover-1-hardback.jpg" alt="Content Box Banner">
                </div>
                <div class="merch-label">Art: <span class="pound-sign">£</span>22.00 (<span class="pound-sign">£</span>2.99 P&P)</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251735338', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>

        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('Art-Cards')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/store/art.png" alt="Content Box Banner">
                </div>
                <div class="merch-label">Art: <span class="pound-sign">£</span>8.50 (set of 6)</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251744730', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>

        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('T-Shirts')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/store/blue-t-no-text.png" alt="Content Box Banner">
                </div>
                <div class="merch-label">T-Shirts: <span class="pound-sign">£</span>20.00</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251743912', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>

        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('Hoodies')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/store/black-hoodie.png" alt="Content Box Banner">
                </div>
                <div class="merch-label">Hoodies: <span class="pound-sign">£</span>45.00</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251740379', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>

        <div class="content-section-style store-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{strtoupper('Bookmark')}}
                </div>
            </div>
            <div class="store-content">
                <div class="merch-image">
                    <img class="store-image" src="\img/store/bookmark-a-side.jpg" alt="Content Box Banner">
                    <img class="store-image" src="\img/store/bookmark-b-side.jpg" alt="Content Box Banner">
                </div>
                <div class="merch-label">Bookmark: <span class="pound-sign">£</span>2.50</div>
                <button onclick="window.open('https://www.ebay.co.uk/itm/304251741993', '_blank')" class="button button-override text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">Buy Now</button>
            </div>
        </div>
    </div>
    <style>
        .button-override {
            max-width: 90%;
            transform: translateX(-1%);
        }

        .store {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 94%;
        }

        .store-container {
            display: flex;
            flex-direction: column;
            width: 18em;
            min-width: 270px;
            position: relative;
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
            color: var(--title);
            font-size: 3vw;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            z-index: 1;
        }

        .header-image-text {
            font-size: 16px;
            position: absolute;
            top: 25%;
            left: 14%;
        }

        .store-content {
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
            justify-content: center;
            height: 300px;
            width: 80%;
        }

        .store-content:before {
            content: "";
            border: 1px black solid;
            border-top: none;
            border-radius: 15px;
            height: 82%;
            width: 82%;
            position: absolute;
            transform: translateY(-2%);
            z-index: 0;
        }

        .store-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 24%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            margin: auto;
            max-height: 183px;
            z-index: 1;
        }

        .merch-label {
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .merch-image {
            display: flex;
            flex-direction: row;
            height: 70%;
        }

        @media only screen and (max-width: 599px) {
            .store-content:before {
                content: "";
                border: 1px black solid;
                border-top: none;
                border-radius: 15px;
                height: 86%;
                width: 73%;
                position: absolute;
                transform: translate(-1%, -5%);
                z-index: 0;
            }
        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px) {
            .store {
                margin-top: -3em;
            }
        }

        @media only screen and (min-width: 600px) {
            .store-content {
                font-size: 1vw;
                max-width: 90%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 600px;
                width: 85%;
            }

            .header-image-container {
                max-width: 93.4%;
                left: -2.2%;
                transform: translateY(36%);
            }

            .header-image-text {
                font-weight: bolder;
                font-size: 48px;
                top: 25%;
                left: 14%;
                transform: translateY(-2%);
            }

            .store-container {
                max-width: 40%;
                min-width: 45em;
            }

            .store-image {
                max-height: 387px;
            }

            .merch-label {
                font-size: 40px;
                bottom: 10px;
            }
        }
    </style>
@endsection
