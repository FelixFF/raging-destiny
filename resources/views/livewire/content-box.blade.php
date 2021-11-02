<div id="content-box" class="content-section-style style-content-box">
    <div class="header-image-container">
        <img class="header-image" src="\img/content/box-banner.png" alt="News Banner">
        <div class="header-image-text">
            {{ $title }}
        </div>
    </div>
    @if (isset($innerHeading))
        <div class="inner-heading">
            {{ $innerHeading }}
        </div>
    @endif
    <div class="content">
        {{ $content }}
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
        color: #0137ca;
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

    .content {
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

    .inner-heading {
        font-size: 1.6vw;
        font-weight: bold;
    }

    @supports (-webkit-text-stroke: 1px black) {
        .inner-heading {
            -webkit-text-stroke: 1px #0137ca;
            -webkit-text-fill-color: white;
        }
    }
</style>

