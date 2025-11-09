@php
    $featured = [
        [
            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
            'detail' => 'Jadwal 24 jam',
        ],
        [
            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
            'detail' => 'Door to door',
        ],
        [
            'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z',
            'detail' => 'Free bagasi 15 kg',
        ],
    ];

@endphp
<div class="bg-white p-5 rounded-lg shadow-lg border-b-8 border-b-primary !text-left">
    <div class="relative">
        <img class="w-full rounded-md aspect-video bg-primary/25 brightness-100 hover:brightness-90" loading="lazy"
            src="{{ $thumbnail }}" alt="{{ $title }}" title="{{ $title }}" width="800" height="450" />
        <span
            class="absolute top-0 left-0 bg-primary text-slate-300 font-semibold p-1 px-2 text-xs rounded-br-lg rounded-tl-lg">
            Unggulan
        </span>
    </div>
    <h3 class="my-4 text-[17px] line-clamp-2" title="{{ $title }}">
        {{ $title }}
    </h3>
    <div class="!text-sm ">

        <div class="">
            @foreach ($featured as $item)
                <div class="flex space-x-2 items-center mb-1.5 line-clamp-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3.5 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                    </svg>

                    <p class="text-sm">{{ $item['detail'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="mt-4 mb-2 line-clamp-2">
            Pesan {{ $title }} anda sekarang juga bersama kami.
        </p>
        <a class="underline opacity-75" href="{{ $url }}" title="{{ $title }}">
            Baca selengkapnya...
        </a>
        <div class="w-full mt-4">
            <a href='{{ whatsapp(null, "Halo admin.\nSaya ingin tanya tentang " . $title . "\n\n" . $url) }}'
                title="{{ $title }}" class="btn-primary w-full" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
                Pesan Travel
            </a>
        </div>
    </div>
</div>
