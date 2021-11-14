@extends('layouts.app')

@section('content')
    <div style="display:flex; justify-content: space-between; flex-direction: row;">
        <div id="books" class="content-section-style books">
            @foreach (File::glob(public_path('img/books').'/*') as $path)
                @if (str_contains($path, 'modal') === false)
                    <div class="books-image" onclick="#">
                        <img src="{{ str_replace(public_path(), '', $path) }}" alt=""
                             onclick='Livewire.emit("openModal", "book-preview-modal", @json(['book' => $path]))'>
                        {{-- @livewire('content-box', ['title' => 'Book Preview', 'content' => ' '], key($user->id)) --}}
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    <style>
        .books {
            /*justify-content: space-evenly;*/
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 80%;
            transition: box-shadow 0.4s ease-out;
        }

        .books-image {
            margin: 1em;
            z-index: 0;
            /* max-width: 35%; */
            max-width: 25%;
            min-width: 25em;
            border-radius: 50% !important;
            position: relative;
        }

        .books-image:hover {
            cursor: pointer;
            transform: scale(1.1);
            /*-webkit-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*-moz-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            transition: transform 0.3s ease-in-out;
        }
    </style>
@endsection
