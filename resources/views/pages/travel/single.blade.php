@extends('app')

@section('content')
    <article>

        <x-background-hero>
            <h1 class="leading-tight">{{ $title }} Untuk Hari Ini</h1>
        </x-background-hero>

        <div class="min-h-16"></div>

        @include('components.travel.single.index')
    </article>
@endsection
