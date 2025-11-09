@extends('app')

@section('content')
    @include('components.home.hero')

    <div class="-mt-16 xl:-mt-20 relative">
        <x-travel.archive.search />
    </div>

    <div class="my-space"></div>

    <x-travel.archive.index />

    <div class="my-space"></div>

    <x-home.featured />

    <div class="my-space"></div>

    <x-home.partner />

    <div class="my-space"></div>

    <x-gallery.index />

    <div class="my-space "></div>

    <x-home.cta />

    <x-home.faq />

    <div class="my-space"></div>

    <x-contact.index />
@endsection
