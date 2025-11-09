@php
    $originName = Str::title($origin->name);
    $destinationName = Str::title($destination->name);

    $testimonial = [
        [developer()->name, $productSchema['reviewBody']],
        [
            'Agus Ferdinand',
            'Perjalanan Travel ' .
            $destinationName .
            ' ' .
            $originName .
            ' sangat memuaskan, berangkatnya tepat waktu dan driver jemput saya langsung dari rumah.',
        ],
        [
            'Karina',
            'Saya telah pesan carter drop dari ' .
            $originName .
            ' ke ' .
            $destinationName .
            '. Sangat rekomendasi, walaupun mendadak tetap dilayani dengan sat set sat set.',
        ],
        [
            'Sinta Rona',
            'Driver travel ' .
            $destinationName .
            ' sangat profesional dan berpengalaman. Kami dibantu sampai tujuan dan diantar ke tempat wisata yang kami inginkan. Selama perjalanan juga kami mendapatkan bonus makan dan minum.',
        ],
    ];

    $gallery = [
        [asset('images/gallery/1.jpg'), 'Mobil ertiga'],
        [asset('images/gallery/3.jpg'), 'Mobil ' . $page],
        [asset('images/gallery/7.jpg'), 'Mobil Travel ' . $destinationName . ' ' . $originName],
        [asset('images/gallery/11.jpg'), 'Galeri Mobil travel'],
    ];

    function paramsSingleTravel($originName, $destinationName, $originId, $destinationId)
    {
        return route('travel.show', [
            'originName' => Str::slug($originName),
            'destinationName' => Str::slug($destinationName),
            'originId' => $originId,
            'destinationId' => $destinationId,
        ]);
    }
@endphp

<div class="my-container">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-y-10 md:gap-x-10 lg:gap-x-20">
        <div class="md:col-span-8 ">
            <img src="{{ $thumbnail['url'] }}" class="rounded-md shadow-md" title="{{ $page }}"
                alt="{{ $thumbnail['alt'] }}" width="{{ $thumbnail['width'] }}" height="{{ $thumbnail['height'] }}">
        </div>


        <div
            class="md:sticky md:top-[60px] h-fit md:col-span-4 p-3 sm:p-5 bg-background-primary rounded-md shadow-md border-b-8 border-primary [&_*]:!text-center">
            <p>Pesan <strong class="!font-normal">{{ $page }} sekarang juga!</strong></p>

            <div>
                <a target="_blank" href="{{ whatsapp() }}" rel="nofollow noindex" title="Pesan travel"
                    class="btn-primary mt-5 !text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    Pesan travel
                </a>
            </div>
        </div>

        <div class="md:col-span-8" id="detail">
            <p>
                Perjalanan travel adalah suatu hal yang sangat mengasikan tapi harus penuh kewaspadaan dan penuh kehati-hatian.
            </p>
        </div>
    </div>
</div>
