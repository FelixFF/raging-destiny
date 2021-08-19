<div class="menu w-2/5">
    <button class="p-1 m-2">
        <a href="/news">
            <img src="{{ asset('/img/menu/menu-button-home.png') }}" alt="News Button">
        </a>
    </button>
    <button class="p-1 m-2">
        <a href="/history" >
            <img src="{{ asset('/img/menu/menu-button-history.png') }}" alt="History Button">
        </a>
    </button>
    <button class="p-1 m-2">
        <a href="/store">
            <img src="{{ asset('/img/menu/menu-button-store.png') }}" alt="Store Button">
        </a>
    </button>
    <button class="p-1 m-2">
        <a href="/library">
            <img src="{{ asset('/img/menu/menu-button-books.png') }}" alt="Library Button">
        </a>
    </button>
    <button class="p-1 m-2">
        <a href="/popCulturePauseScreen">
            <img src="{{ asset('/img/menu/menu-button-pcps.png') }}" alt="PCPS Button">
        </a>
    </button>
    <button class="p-1 m-2">
        <a href="/contact">
            <img src="{{ asset('/img/menu/menu-button-contact.png') }}" alt="Contact Button">
        </a>
    </button>
</div>
<style>
    .menu {
        margin: 0 auto 2em;
        position: sticky;
        display: flex;
        flex-wrap: wrap;

        top: 0;
        flex-direction: row;
        flex-wrap: wrap;
        width: 80%;
        align-content: center;
        justify-content: space-around;
        background-image: url('/img/top-border-v2.png');
        max-height: 5.5em;
        background-size: 100% 99%;
        background-repeat: no-repeat;
        background-position: center center;

        padding-top: 1em;
        padding-bottom: 3em;
        padding-left: 3em;
        padding-right: 3em;
    }

    button {
        margin-top: 0.5em;
        width: 15%;
    }

    button:hover {
        opacity: 0.5;
    }
</style>
