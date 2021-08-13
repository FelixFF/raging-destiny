@extends('layouts.app')

@section('content')
<div id="books" class="content-section-style books">
    @foreach (File::glob(public_path('img/books').'/*') as $path)
        <div class="books-image" onclick="#">
            <img src="{{ str_replace(public_path(), '', $path) }}" alt="">
        </div>
    @endforeach
</div>
@endsection
