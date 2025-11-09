@php
    $galeri = [
        [
            ['/images/gallery/1.jpg', 'aspect-[10/10]'],
            ['/images/gallery/2.jpg', 'aspect-[10/13]'],
            ['/images/gallery/3.jpg', 'aspect-[10/13]'],
        ],
        [
            ['/images/gallery/4.jpg', 'aspect-[10/12]'],
            ['/images/gallery/5.jpg', 'aspect-[10/14]'],
            ['/images/gallery/6.jpg', 'aspect-[10/10]'],
        ],
        [
            ['/images/gallery/7.jpg', 'aspect-[10/14]'],
            ['/images/gallery/8.jpg', 'aspect-[10/11]'],
            ['/images/gallery/9.jpg', 'aspect-[10/11]'],
        ],
        [
            ['/images/gallery/10.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/11.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/12.jpg', 'aspect-[10/8.75]'],
            ['/images/gallery/13.jpg', 'aspect-[10/8.75]'],
        ],
    ];

    $index = 1;
@endphp


<div class="my-container text-center">
    <x-sub-heading subTitle='Galeri Mobil Travel' description='Kami memiliki berbagai mobil travel terbaik.' />

    <div
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6 lg:gap-7 [&_img]:rounded-md [&_img]:w-full [&_img]:object-cover [&_img]:object-top [&_img]:shadow-lg [&_img]:border-b-8 [&_img]:border-primary [&_img]:brightness-75 [&_img]:hover:brightness-90">

        @foreach ($galeri as $i => $group)
            <div
                class="grid gap-5 md:gap-6 lg:gap-7 md:last:grid-cols-4 md:last:col-span-full lg:last:grid-cols-1 lg:last:col-span-1">
                @foreach ($group as $item)
                    <a href="{{ asset($item[0]) }}" title="Galeri {{ $index }}">
                        <img src="{{ asset($item[0]) }}" loading="lazy" class="{{ $item[1] }}"
                            title="Galeri {{ $index }}"
                            alt="Galeri {{ config('app.name') }} ke-{{ $index++ }}" width="400" height="400">
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>

</div>
