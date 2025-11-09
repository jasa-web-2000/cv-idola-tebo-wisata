@php
    $list = [
        [
            'icon' =>
                'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z',
            'subSubTitle' => 'Garasi',
            'detail' => address()->streetAddress,
        ],
        [
            'icon' =>
                'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z',
            'subSubTitle' => 'Telepon',
            'detail' => phoneNumber(),
        ],
        [
            'icon' =>
                'M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z',
            'subSubTitle' => 'whatsapp Chat',
            'detail' => phoneNumber(),
        ],
    ];

@endphp

<div class="md:col-span-1 lg:col-span-5 content-start grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-6">
    @foreach ($list as $item)
        <div
            class="flex gap-x-5 items-start mb-5 {{ !$loop->first ? 'sm:col-span-1 md:col-span-1' : '!col-span-full' }}">
            <div
                class="simple-gradient grid place-items-center text-text-description-white h-12 w-12 rounded-lg shadow-md shrink-0">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8 relative">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                </svg>


            </div>
            <div class="">
                <h3 class="leading-[100%] mb-2">{{ $item['subSubTitle'] }}</h3>
                <p>{{ $item['detail'] }}</p>
            </div>
        </div>
    @endforeach

</div>
