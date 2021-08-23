@extends('layouts.app')

@section('content')
<div style="display:flex; justify-content: space-between; flex-direction: row;">
<div id="books" class="content-section-style books">
    @foreach (File::glob(public_path('img/books').'/*') as $path)
        <div class="books-image" onclick="#">
            <img src="{{ str_replace(public_path(), '', $path) }}" alt="">
        </div>
    @endforeach
</div>
<div style="border: 2px red solid; min-height: 100%; min-width: 60%; margin-right: 3em">
    dasdsa
</div>
</div>
<style>
    .books {
        display: flex;
        flex-direction: row;
        flex-direction: column;
        /* justify-content: space-evenly; */
        justify-content: flex-start;
        align-items: flex-start;
        flex-wrap: wrap;
        margin-left: 4em;
    }

    .books-image {
        /* max-width: 35%; */
        max-width: 60%;
        border-radius: 50% !important;
        cursor: pointer;
    }
</style>
@endsection
