<div class="modal-container">
    <div class="close-button" wire:click='$emit("closeModal")'>x</div>
    <img src="{{ str_replace(public_path(), '', $modalContent)}}" alt="" style="transform: translatey(-2%)">
</div>
<style>
    .modal-container {
        position: relative;
    }

    .bg-white {
        background: transparent !important;
    }

    .sm\:block {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        width: 30% !important;
        margin-inline: auto;
    }

    .close-button {
        display: none;
    }

    @media only screen and (max-width: 600px) {
        .bg-white {
            top: 0;
            position: absolute;
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
            top: 0;
            right: 0;
        }
    }

    img {

    }
</style>
