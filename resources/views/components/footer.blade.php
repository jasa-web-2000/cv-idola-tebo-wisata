@php
    $contactItem = [
        [
            'href' => address()->linkAddress,
            'label' => address()->addressLocality,
            'icon' =>
                'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z',
        ],
        [
            'href' => 'tel:' . phoneNumber(null, true),
            'label' => phoneNumber(),
            'icon' =>
                'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z',
        ],
        [
            'href' => whatsapp(),
            'label' => phoneNumber(),
            'icon' =>
                'M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z',
        ],
    ];
@endphp

<div class="my-space "></div>
<footer class="relative mt-10">
    <div class="hero-gradient"></div>
    <div class="relative my-container">
        <div
            class="py-12 grid gap-8 sm:gap-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-12 [&_h3]:mb-3 [&_h3]:text-text-title-white [&_.footerList]:flex [&_.footerList]:flex-col [&_.footerList]:gap-y-2 [&_:is(p,_.footerList_a)]:text-text-description-white [&_.footerList_a]:hover:text-primary/80 [&_.footerList_a]:flex [&_.footerList_a]:items-center [&_.footerList_a]:gap-1.5 [&_.footerList_a_svg]:shrink-0">



            <!-- Logo -->
            <div class="sm:col-span-full md:col-span-6 sm:max-w-3/4 md:max-w-full lg:max-w-[400px]">
                <x-logo />
                <p class="light">
                    Ayo jadwalkan travel anda bersama <strong>{{ web()->title }}</strong>, siap membantu 24 jam. -
                    {{ web()->tagline }}.
                </p>
            </div>

            <!-- Laman -->
            <div class="sm:col-span-1 md:col-span-2">
                <h3 class="light">Laman</h3>
                <div class="footerList">
                    @foreach (menu() as $item)
                        <a class="{{ $item[0] == request()->url() ? '!text-primary/95' : '' }} "
                            href="{{ $item[0] }}" title="{{ $item[1] }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>


                            {{ $item[1] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Kontak -->
            <div class="sm:col-span-1 md:col-span-4">
                <h3 class="light">Kontak</h3>
                <a target="_blank" rel="nofollow noindex"
                    class="animate-bounce bg-gradient-to-bl hover:from-green-600 hover:to-green-800 from-green-700 to-green-900 rounded-full fixed right-5 bottom-5 p-3 shadow z-[999] hover:rotate-12 duration-300"
                    href={{ whatsapp() }} title="whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-slate-50 w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                    <span class="hidden">{{ phoneNumber() }}</span>
                </a>
                <div class="footerList">

                    @foreach ($contactItem as $item)
                        <a target="_blank" href="{{ $item['href'] }}" rel="nofollow noindex"
                            title="{{ $item['label'] }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                            </svg>

                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-slate-300 border-t border-slate-700 py-5">
            <p>
                Copyright © since Oct 2025 - {{ date('M Y') }} |
                {{ web()->title }}.
            </p>
            <p>
                Mau web seperti ini? Hubungi <a target="_blank" class="underline text-slate-300"
                    href={{ developer()->url }} title={{ developer()->name }}>
                    {{ developer()->name }}
                </a> via whatsapp
            </p>
        </div>
    </div>
</footer>
