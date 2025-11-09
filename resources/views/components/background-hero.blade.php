<div class="relative [&_p]:text-lg" id="hero">
    <div class="hero-gradient" style="background-image: url({{ asset('/images/general/background-hero.webp') }});">
    </div>
    <div class="my-container py-mine xl:py-36 text-center relative z-10">
        <div class="max-w-[650px] mx-auto">
            {{ $slot }}
        </div>
    </div>
</div>
