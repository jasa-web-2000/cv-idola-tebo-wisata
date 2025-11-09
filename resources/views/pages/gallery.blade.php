@extends('app')

@section('content')
    <x-background-hero>
        <h1>{{ $page }}</h1>
    </x-background-hero>

    <div class="my-space"></div>

    <x-gallery.index />
@endsection
