<div class="banner-container">
    <div class="event">
        <img src="\img/event/oll-event.jpg" class="event-img md:block" alt="Event Image">
        <div class="label">Norwich Vintage & Modern Toy Fair</div>
        <div class="label">Sun 6th March 9:30am - 14:00pm</div>
    </div>
    <div class="event">
        <img src="\img/event/toy-fair-event.jpg" class="event-img md:block" alt="Event Image">
        <div class="label">OLL 22 Video Game Convention</div>
        <div class="label">Sat/Sun 9th-10th April</div>
    </div>
</div>
<style>
    .banner-container {
        z-index: 1;
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
        max-width: 22%;
        min-width: 140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
    }

    .event:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .event-img {
        max-height: 225px;
    }

    .event .label {
        color: whitesmoke;
        font-size: 2vw;
        display: none;
    }

    @media only screen and (min-width: 600px) {
        .event-img {
        }

        .event .label {
            color: whitesmoke;
            font-size: 1vw;
            display: block;
        }
    }
</style>
