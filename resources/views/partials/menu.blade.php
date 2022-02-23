<div class="menu">
    <div id="menu-buttons" class="button-container">
        <button class="hover:scale-150">
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
        z-index: 9;
        position: -webkit-sticky;
        position: sticky !important;

        display: flex;
        flex-wrap: wrap;
        margin: 0 auto 2em;

        top: 0;
        flex-direction: row;
        width: 1280px;
        align-content: center;
        justify-content: center;
        background-image: url('/img/top-border-with-title-v2.png');
        /* max-height: 5.5em; */
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: top center;

        padding-bottom: 11em;
        /*transform: translateY(-45%);*/
    }

    .button-container {
        position: absolute;
        bottom: 57px;
        display: flex;
        justify-content: center;
        max-width: 85%;
    }

    button {
        margin: 0.6em 0.7em;
        width: 14%;
    }

    @media only screen and (max-width: 399px)
    {
        .button-container {
            display: flex;
            flex-wrap: wrap;
            bottom: 20px;
            transform: translateY(100%);
            width: 300px;
            max-width: 100%;
        }

        .menu {
            width: 100%;
            padding-top: 21px;
            padding-bottom: 3em;
        }

        button {
            margin: -0.3em 0.2em 0.2em 0.2em;
            width: 30%;
            min-width: 30px;
        }
    }

    @media only screen and (min-width: 400px) and (max-width: 600px)
    {
        .button-container {
            max-width: 100%;
            display: flex;
            flex-wrap: wrap;
            bottom: 20px;
            transform: translateY(100%);
        }

        .menu {
            padding-top: 2em;
            padding-bottom: 3em;
            width: 470px;
        }

        button {
            margin: -0.3em 0.2em 0.2em 0.2em;
            width: 25%;
            min-width: 30px;
        }
    }

    @media only screen and (min-width: 600px) and (max-width: 926px)
    {
        .button-container {
            max-width: 100%;
            display: flex;
            flex-wrap: wrap;
            bottom: 20px;
            transform: translateY(100%);
        }

        .menu {
            padding-top: 4em;
            padding-bottom: 3em;
            width: 45em;
            margin-bottom: 5em;
        }

        button {
            margin: -0.3em 0.2em 0.2em 0.2em;
            width: 25%;
            min-width: 30px;
        }
    }

    @media only screen and (min-width: 927px) and (max-width: 1520px)
    {
        .button-container {
            bottom: 25px;
        }
        .menu {
            width: 970px;
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
