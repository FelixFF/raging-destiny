@extends('layouts.app')

@section('content')
    <div style="display:flex; justify-content: space-between; flex-direction: row;">
        <div id="books" class="content-section-style books">
            @foreach (File::glob(public_path('img/books').'/*') as $path)
                <div class="books-image" onclick="#">
                    <img src="{{ str_replace(public_path(), '', $path) }}" alt="">
                    {{-- @livewire('content-box', ['title' => 'Book Preview', 'content' => ' '], key($user->id)) --}}
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .books {
            display: flex;
            flex-direction: row;
            /* justify-content: space-evenly; */
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 5%;
        }

        .books-image {
            z-index: 0;
            /* max-width: 35%; */
            max-width: 25%;
            border-radius: 50% !important;
            cursor: pointer;
        }
    </style>
@endsection
