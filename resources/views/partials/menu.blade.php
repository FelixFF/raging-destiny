<div class="menu">
    <div class="button-container">
        <button class="">
            <a href="/news">
                <img src="{{ asset('/img/menu/menu-button-home.png') }}" alt="News Button">
            </a>
        </button>
        <button class="">
            <a href="/history" >
                <img src="{{ asset('/img/menu/menu-button-history.png') }}" alt="History Button">
            </a>
        </button>
        <button class="">
            <a href="/library">
                <img src="{{ asset('/img/menu/menu-button-books.png') }}" alt="Library Button">
            </a>
        </button>
        <button class="">
            <a href="/characters">
                <img src="{{ asset('/img/menu/menu-button-character.png') }}" alt="Character Select Button">
            </a>
        </button>
        <button class="" style="display: none">
            <a href="/popCulturePauseScreen">
                <img src="{{ asset('/img/menu/menu-button-pcps.png') }}" alt="PCPS Button">
            </a>
        </button>
        <button class="">
            <a href="/store">
                <img src="{{ asset('/img/menu/menu-button-store.png') }}" alt="Store Button">
            </a>
        </button>
        <button class="">
            <a href="/contact">
                <img src="{{ asset('/img/menu/menu-button-contact.png') }}" alt="Contact Button">
            </a>
        </button>
    </div>
</div>
<style>
    .menu {
        position: -webkit-sticky;
        position: sticky;

        display: flex;
        flex-wrap: wrap;
        margin: 0 auto 2em;

        top: 0;
        flex-direction: row;
        flex-wrap: wrap;
        width: 80%;
        align-content: center;
        justify-content: center;
        background-image: url('/img/top-border-with-title-v2.png');
        /* max-height: 5.5em; */
        background-size: 100% 99%;
        background-repeat: no-repeat;
        background-position: center center;

        padding-bottom: 10em;
    }

    .button-container {
        position: absolute;
        bottom: 36px;
        display: flex;
        justify-content: center;
        max-width: 90%;
    }

    button {
        margin: 0 0.6em;
        width: 14%;
    }

    @media only screen and (max-width: 54em)
    {
        .button-container {
            max-width: 85%;
            bottom: 20px;
        }

        .menu {
            padding-top: 2em;
            padding-bottom: 3em;
        }

        button {
            margin: -0.3em 0.2em 0.2em 0.2em;
            width: 25%;
        }
    }

    @media  only screen and (min-width: 55em) and (max-width: 90em)
    {
        .button-container {
            max-width: 70%;
            bottom: 25px;
        }
        .menu {
            padding-top: 3em;
            padding-bottom: 4em;
        }

        button {
            margin: -0.3em 0.2em 0.2em 0.2em;
            width: 20%;
        }
    }


    button:hover {
        opacity: 0.5;
    }
</style>
