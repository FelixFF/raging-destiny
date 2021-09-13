@extends('layouts.app')

@section('content')
    @livewire('content-box', ['title' => $contentBoxTitle, 'content' => $contentBoxContent], key($user->id))
@endsection
