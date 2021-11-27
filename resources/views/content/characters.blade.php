@extends('layouts.app')

@section('content')
    <div id="characters" class="content-section-style character-container">
        @foreach (array_reverse(File::glob(public_path('img/characters').'/*')) as $path)
            <div class="character" onclick='Livewire.emit("openModal", "character-bio-modal", @json(['pathToModalContent' => $path]))'>
                @if (strpos($path, 'bio') === false)
                    <div>
                        <img src="{{ str_replace(public_path(), '', $path) }}" alt="Character Image">
                        <div class="character-name">{{ ucfirst(str_replace([public_path(), '\img/characters/', '/img/characters/', '.jpg'], '', $path)) }}</div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    <style>
        .character-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 60%;
            transition: box-shadow 0.4s ease-out;
        }

        .character {
            margin: 1em;
            position: relative;
            z-index: 4;
        }

        .character:hover {
            cursor: pointer;
            transform: scale(1.1);
            /*-webkit-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*-moz-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            transition: transform 0.3s ease-in-out;
        }

        .character:before {

        }

        .character-name {
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            font-size: 41px;
            margin-bottom: 1em;
        }
    </style>
@endsection
