@extends('layouts.app')

@section('content')
    <div class="history-browser">
        <span class="chevron left"><</span>
        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))
        <span class="chevron right">></span>
    </div>
    <style>
        .history-browser {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .chevron {
            font-size: 70px;
            font-weight: bolder;
            color: red;
            position: relative;
        }

        /* .chevron.left {
            margin-right : -10em;
        }

        .chevron.right {
            margin-left: -10em;
        } */
    </style>
@endsection
