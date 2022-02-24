<div class="banner-container">
    <div class="event" onclick="window.open('http://norwichtoyfairs.co.uk/')">
        <img src="\img/event/toy-fair-event.jpg" class="event-img" alt="Event Image">
        <div class="times">Sun 6th March 9:30am - 14:00pm</div>
    </div>
    <div class="event" onclick="window.open('https://ollgames.co.uk/')">
        <img src="\img/event/oll-event.jpg" class="event-img" alt="Event Image">
        <div class="times">Sat-Sun 9th-10th April</div>
    </div>
    <div class="event" onclick="window.open('https://www.mcmcomiccon.com/')">
        <img src="\img/event/mcm-comicon-london.jpg" class="event-img" alt="Event Image">
        <div class="times">Fri-Sun 27th-29th May 9:00am - 16:00pm</div>
    </div>
    <div class="event" onclick="window.open('https://summer.londonanimecon.com/')">
        <img src="\img/event/anime-league.jpg" class="event-img" alt="Event Image">
        <div class="times">Sat-Sun 13th-14th Aug 10:00am - 16:00pm</div>
    </div>
</div>
<style>
    .banner-container {
        z-index: 0;
        background-color: rgb( 0, 0, 255, 0.2);
        width: 100%;
        height: 80%;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: auto;
        padding: 15px 0;
    }

    .event {
        height: 90%;
        max-width: 20%;
        min-width: 140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        z-index: 3;
    }

    .event:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .event-img {
        max-height: 160px;
    }

    .event .label {
        color: whitesmoke;
        font-size: 2vw;
        display: none;
    }

    .event.times {
        color: whitesmoke;
        font-size: 1vw;
        display: block;
    }

    @media only screen and (min-width: 600px) {
        .event-img {
        }

        .event .label {
            color: whitesmoke;
            font-size: 14px;
            display: block;
        }

        .event .times {
            font-size: 14px;
        }
    }
</style>
