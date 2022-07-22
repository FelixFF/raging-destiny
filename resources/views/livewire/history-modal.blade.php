<div class="modal-container">
    <div class="close-button" wire:click='$emit("closeModal")'>x</div>
    <div class="text-background">
        <div class="content">{!! $modalContent->content !!} </div>
    </div>
</div>
<style>
    .bg-white {
        background: none !important;
        /*background: url('/img/modal-content-container.png') !important;*/
        overflow: auto;
        box-shadow: none !important;
    }

    .modal-container {
        position: relative;
    }

    .sm\:block {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        margin-inline: auto;
    }

    @media screen and (min-width: 1024px) {
        .sm\:block {
            width: 900px !important;
        }
    }

    .text-background {
        background-image: url('/img/modal-content-container.png') !important;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        height: 700px !important;
        margin-inline: auto;
    }

    .content {
        width: 380px;
        max-height: 570px !important;
        height: 100%;
        margin-top: 3em;
        overflow: auto;
        transform: translateY(-5%);
        font-size: 12px;
    }

    .close-button {
        display: none;
    }

    @media only screen and (max-width: 520px) {
        .bg-white {
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-container {
            margin-top: -5em;
        }

        .content {
            width: 200px;
            height: 353px !important;
            transform: translateY(-7%);
        }
        .text-background {
            min-height: 0;
            width: 306px;
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
            transform: translateY(6em);
            right: 0;
        }
    }

    @media only screen and (min-width: 600px) {
        .text-background {
            min-height: 800px;
            width: 600px !important;
            background-size: cover;
        }

        .content {
            width: 450px;
        }
    }
</style>
