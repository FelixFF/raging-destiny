@extends('layouts.app')

@section('content')
    <div id="news" class="content-section-style news">
        @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))
    </div>
    <style>
        .news {
            display: block;
        }

        .news-section {
        }

        .container {

        }

        .top-left-text {
        }

        .top-left-image {

        }
    </style>
@endsection
