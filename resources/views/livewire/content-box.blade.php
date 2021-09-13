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
        max-width: 88.7%;
        /* transform: translate(-37.8%, 28%); */
        transform: translate(-2.8%, 30%);
        position: relative;
        text-align: center;
        color: darkblue;
        font-size: 3vw;
        font-weight: bold;
        font-family: "EXCELSIOR SANS";
        font-style: italic;
    }

    .header-image-text {
        position: absolute;
        top: 32%;
        left: 14%;
    }

    .content {
        border: 2px whitesmoke solid;
        padding: 10px;
        /* overflow-y: scroll; */
        background-color: rgba(55, 65, 81, 1);
        font-size: 1vw;
        max-width: 80%
    }
</style>

