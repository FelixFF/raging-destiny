<div>
    <div id="history" class="content-section-style style-content-box">
        <div class="header-image-container">
            <img class="header-image" src="\img/content/box-banner.png" alt="News Banner">
            <div class="header-image-text">
                {{ $title }}
            </div>
        </div>
        <div class="content">
            {{ $content }}
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
        color: #00bcfe;
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
        /* overflow-y: scroll; */
        background: #7a8795;
        font-size: 1vw;
        max-width: 80%;
        text-shadow: 0 0 4px #020434;
        border-radius: 0 0 15px 15px;
    }
</style>

