@extends('layouts.app')

@section('content')
    <div id="history" class="content-section-style history">
        @foreach($histories as $history)
            <div class="history-folder"
                 onclick='Livewire.emit("openModal", "history-modal", @json(['titleOfHistory' => $history]))'>
                <img src="\img/folder-icon.png" alt="Folder image"/>
                <span>{{ $history }}</span>
            </div>
        @endforeach
    </div>
    <style>
        .history {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 60%;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            font-size: 41px;
            margin-bottom: 1em;
        }

        .image-content img {
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
        }

        i {
            font-size: 2em !important;
        }

        @media only screen and  (max-width: 600px) {
            .history {
                font-size: 24px;
            }
        }

        .history-folder {
            width: 40%;
            height: 40%;
            margin: 1em;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }

        .history-folder:hover {
            cursor: pointer;
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }
    </style>
@endsection
