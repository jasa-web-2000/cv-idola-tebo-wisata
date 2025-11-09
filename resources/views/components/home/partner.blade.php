@php
    $partner = [
        ['Jasa Travel', 'https://jasatravel.web.id/', 'https://jasatravel.web.id/img/travel.png'],
        [
            'Mumpuni Trans Java',
            'https://mumpunitransjava.com/',
            'https://mumpunitransjava.com/wp-content/uploads/2025/07/cropped-WhatsApp_Image_2025-07-05_at_14.47.13_ae91f1b6-removebg-preview.png',
        ],
        ['Arman Trans', 'https://armantrans.com/', 'https://armantrans.com/img/travel.png'],
        [
            'Sl Twin',
            'https://www.sltwintranstravel.my.id',
            'https://www.sltwintranstravel.my.id/wp-content/uploads/2023/01/cropped-WhatsApp_Image_2023-01-02_at_13.48.22-removebg-preview.png',
        ],
        ['Kangoroo Travel', 'https://kangoroo-travel.id/', 'https://kangoroo-travel.id/img/travel.png'],
        [
            'Ghania Trans',
            'https://ghaniatranstravel.com/',
            'https://ghaniatranstravel.com/wp-content/uploads/2025/04/1.png',
        ],
    ];
@endphp

<div class="my-container">

    <div class="text-center bg-background-primary px-5 shadow rounded-md">
        <div class="my-space"></div>
        <h2 class="text-base text-text-title-black">
            Partner Travel Kami
        </h2>
        <ul class="max-w-[360px] sm:max-w-[500px] mx-auto mt-8 grid grid-cols-2 sm:grid-cols-3 [&_*]:border-slate-300">
            @foreach ($partner as $item)
                <li>
                    <a target="_blank" title="{{ $item[0] }}" href="{{ $item[1] }}">
                        <div class="border p-4 hover:bg-background-secondary relative">
                            <img loading="lazy"
                                class="w-full hover:scale-[1.05] aspect-[16/9] grayscale hover:grayscale-0 object-contain"
                                src="{{ $item[2] }}" title="{{ $item[0] }}" alt="{{ $item[0] }}">
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="my-space"></div>
    </div>

</div>
