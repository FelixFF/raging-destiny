<div id="library" class="content-section-style library">
    <div class="close-button" wire:click='$emit("closeModal")'>x</div>
    <div class="header-image-container">
        <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
        <div class="header-image-text">
            {!! $modalContent->bookTitle !!}
        </div>
    </div>
    <div class="book-content">
        <div class="inner-container">
            <div class="inner-header">
                {!! $modalContent->bookSubHeading !!}
            </div>
            <div class="main-content">
                @if ($modalContent->showImage)
                    <div class="book-image-container">
                        <img class="book-image" src="{{ $modalContent->bookImage }}" alt="Book Image">
                    </div>
                @endif

                <div class="book-text-content {{ $modalContent->showImage ? '' : 'book-text-content-resize' }}">
                    <div class="book-intro">{!! $modalContent->bookIntro !!}</div>
                    <div
                        class="book-text {{ $modalContent->showImage ? '' : 'book-text-resize' }}">{!! $modalContent->bookText !!}</div>
                </div>
            </div>
            <div class="book-footer book-button-text">{!! $modalContent->bookButtonText !!}</div>
            <div class="button-container button-container-override">
                @foreach($modalContent->bookButtons as $button)
                    @if($button->type === 'standard')
                        <button onclick="window.open('https://www.ebay.co.uk/itm/304251724807', '_blank')" class="book-button button text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">{{ $button->text }}</button>
                    @elseif($button->type === 'signature')
                        <button onclick="window.open('https://www.ebay.co.uk/itm/304251735338', '_blank')" class="book-button button text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">{{ $button->text }}</button>
                    @elseif($button->type === 'book2')
                        <button onclick="location.href='mailto:billy.twigg@hotmail.co.uk'" class="book-button button text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded m-auto">{{ $button->text }}</button>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<style>
    .bg-white {
        background: none !important;
        overflow: hidden;
        box-shadow: none !important;
    }

    .library {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .close-button {
        display: none;
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
        font-family: "EXCELSIOR SANS", serif;
        font-style: italic;
        z-index: 1;
    }

    .header-image-text {
        font-size: 23px;
        font-weight: bolder;
        position: absolute;
        top: 25%;
        left: 14%;
        transform: translateY(-11%);
    }

    .main-content {
        height: 90%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        z-index: 1;
    }

    .book-content {
        padding: 10px;
        background: #cbdbef;
        color: #0137ca;
        font-weight: bold;
        text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
        1px 2px 2px rgba(16, 16, 16, 0.2);
        border-radius: 0 0 15px 15px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        height: 450px;
        width: 80%;
    }

    .book-intro {
        font-size: 10px;
    }

    .book-text {
        font-size: 8px;
        overflow-x: hidden;
    }

    .book-text ul {
        overflow-x: hidden;
    }

    .inner-container {
        height: 64%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .inner-header {
        margin: 0 1em;
        font-family: "EXCELSIOR SANS", serif;
        font-style: italic;
    }

    .book-image-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        min-width: 30%;
        font-size: 16px;
        font-family: "EXCELSIOR SANS", serif;
        font-style: italic;
        z-index: 1;
        height: 70%;
        margin-top: 2em;
    }

    .button-container-override {
        position: absolute;
        width: 80%;
        transform: translateY(-12%);
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        gap: 10px;
        flex-wrap: nowrap;
        bottom: 25px;
    }

    @media only screen and (max-width: 320px) {
        .book-content {
            max-height: 500px;
        }

        .inner-container:before {
            height: 91% !important;
        }

        .button-container-override {
            max-width: 223px !important;
        }
    }

    @media only screen and (max-width: 320px) {
        .button-container-override {
            max-width: 198px !important;
        }
    }

    @media only screen and (min-width: 321px)  and (max-width: 399px) {
        .book-content {
            max-height: 500px;
        }

        .inner-container:before {
            height: 89% !important;
        }

        .button-container-override {
            max-width: 223px !important;
        }
    }

    @media only screen and (min-width: 400px) {
        .header-image-text {
            font-size: 30px;
            font-weight: bolder;
        }
    }

    @media only screen and (max-width: 599px) {
        .bg-white {
            position: absolute;
            top: 0;
        }

        .close-button {
            display: block;
            font-size: 18px;
            color: #0137ca;
            font-weight: bolder;
            position: absolute;
            z-index: 9999;
            background: white;
            border-radius: 50%;
            padding: 0 6px;
            top: 0;
            right: 0;
        }

        .library {
            max-width: 500px;
        }

        .main-content {
            align-content: stretch;
        }

        .header-image-container {
            max-width: 88.4%;
            left: -2.4%;
            transform: translateY(40%);
        }

        .inner-container {
            height: 64%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .inner-container:before {
            content: "";
            border: 1px #050966 solid;
            border-top: none;
            border-radius: 15px;
            max-width: 380px;
            height: 86%;
            width: 75%;
            position: absolute;
            transform: translateY(-5%);
            z-index: 0;
        }

        .inner-header {
            margin: 0.5em 0 1em 0;
            font-size: 17px;
            text-align: center;
        }

        .book-text-content {
            margin-left: -1.2em;
            margin-right: 0.5em;
        }

        .book-text-content-resize {
            margin-left: 0 !important;
            margin-right: 0 !important;
            height: 70%;
            width: 86%;
            text-align: center;
        }

        .book-text-resize {
            height: 215px !important;
        }

        .book-text {
            font-size: 8px;
            overflow: auto;
            height: 119px;
            margin-top: 3em;
        }

        .book-image-container {
            max-height: 183px;
            margin-top: 0;
        }

        .book-image {
            margin-left: -1.5em;
            max-width: 66%;
            min-width: 40%;
        }

        .book-button {
            max-width: 76% !important;
        }

        .book-footer {
            font-size: 8px;
            margin-top: 1.2em;
            height: 20%;
            max-width: 80%;
        }

        .button-container-override {
            max-width: 272px;
        }
    }

    @media only screen and (min-width: 600px) {
        .library {
            width: 100% !important;
            min-height: 700px;
        }

        .book-content {
            font-size: 16px;
            max-width: 77%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 650px;
        }

        .inner-container:before {
            content: "";
            border: 1px #050966 solid;
            border-top: none;
            border-radius: 15px;
            height: 86%;
            width: 74%;
            transform: translateY(-2%);
            position: absolute;
            z-index: 0;
        }

        .header-image-container {
            max-width: 85.4%;
            left: -2.4%;
            transform: translateY(38%);
        }

        .header-image-text {
            font-weight: bolder;
            font-size: 45px;
            top: 25%;
            left: 14%;
            transform: translateY(-2%);
        }

        .main-content {
            width: 100%;
        }

        .inner-header {
            font-size: 33px;
            margin-top: 1em;
        }

        .button-container-override {
            width: 71%;
        }

        .book-image-container {
            height: 273px;
        }

        .book-image {
            max-height: 95%;
        }

        .book-intro {
            font-size: 16px;
            height: 30%;
        }

        .book-footer {
            margin-top: 1.2em;
            height: 20%;
        }

        .book-text {
            font-size: 12px;
            overflow: auto;
            height: 83%;
            margin-top: 3em;
        }

        .book-text-content {
            height: 90%;
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            margin: 1em 0 0 1em;
            position: relative;
        }

        .book-button-text {
            font-size: 13px;
        }
    }

    @supports (-webkit-text-stroke: 0.2px black) {
        .inner-header {
            -webkit-text-stroke: 0.2px #0137ca;
            -webkit-text-fill-color: white;
        }
    }
</style>
