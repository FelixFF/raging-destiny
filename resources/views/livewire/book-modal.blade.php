<div id="library" class="content-section-style library">
    <div class="content-section-style book-container">
        <div class="header-image-container">
            <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
            <div class="header-image-text">
                {!! $modalContent->bookTitle !!}
            </div>
        </div>
        <div class="book-content">
            <div class="inner-header">
                {!! $modalContent->bookSubHeading !!}
            </div>
            <div class="main-content">
                <div class="book-image-container">
                    <img class="book-image" src="{{ $modalContent->bookImage }}" alt="Book Image">
                </div>
                <div class="book-text-content">
                    <div class="book-intro">{!! $modalContent->bookIntro !!}</div>
                    <div class="book-text">{!! $modalContent->bookText !!}</div>
                    <div class="book-footer">
                        <div class="book-button-text">{!! $modalContent->bookButtonText !!}</div>
                        <button class="book-button" content="{{ $modalContent->bookButton }}"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .library {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 94%;
    }

    .book-container {
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

    .main-content {
        display: flex;
        flex-direction: row;
        z-index: 1;
    }

    .book-content {
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
        align-items: center;
        height: 300px;
        width: 80%;
    }

    .book-content:before {
        content: "";
        border: 1px #050966 solid;
        border-top: none;
        border-radius: 15px;
        height: 82%;
        width: 82%;
        position: absolute;
        transform: translateY(-2%);
        z-index: 0;
    }

    .inner-header {
        font-size: 39px;
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

    .book-label {
        font-size: 16px;
        font-family: "EXCELSIOR SANS", serif;
        font-style: italic;
    }

    @media only screen and (max-width: 599px) {
        .book-content:before {
            content: "";
            border: 1px #050966 solid;
            border-top: none;
            border-radius: 15px;
            height: 86%;
            width: 73%;
            position: absolute;
            transform: translate(-1%, -5%);
            z-index: 0;
        }

        .book-text {
            font-size: 8px;
        }

        .inner-header {
            margin: 0.5em 0 1em 0;
            font-size: 13px;
        }

        .book-image-container {
            max-height: 183px;
        }
    }

    @media only screen and  (min-width: 600px) and (max-width: 1531px) {
        .library {
            margin-top: -3em;
        }
    }

    @media only screen and (min-width: 600px) {
        .book-content {
            font-size: 18px;
            max-width: 90%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 650px;
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

        .book-container {
            max-width: 40%;
            min-width: 45em;
        }

        .book-image-container {
            height: 273px;
        }

        .book-image {
            max-height: 95%;
        }

        .book-text {
            margin: 0 1em;
            font-size: 18px;
            overflow: auto;
            max-height: 53%;
        }

        .book-text-content {
            height: 90%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 1em;
        }
    }

    @supports (-webkit-text-stroke: 0.2px black) {
        .inner-header {
            -webkit-text-stroke: 0.2px #0137ca;
            -webkit-text-fill-color: white;
        }
    }
</style>
