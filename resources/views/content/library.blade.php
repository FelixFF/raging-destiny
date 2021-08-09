@extends('layouts.app')

@section('content')
<div id="books" class="content-section-style books">
    @foreach (File::glob(public_path('img/books').'/*') as $path)
        <a href="#">
            <img class="books-image" src="{{ str_replace(public_path(), '', $path) }}" alt="">
        </a>
    @endforeach
</div>
@endsection
