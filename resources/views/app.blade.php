<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    @php
        $resultTitle = ($title ?? web()->title) . ' | ' . web()->title;
        $resultDescription = ($description ?? web()->tagline) . ' | ' . web()->title;
        $resultThumbnail = (object) [
            'url' => $thumbnail['url'] ?? web()->defaultLogo,
            'width' => $thumbnail['width'] ?? 672,
            'height' => $thumbnail['height'] ?? 672,
            'alt' => $thumbnail['alt'] ?? 'Logo ' . web()->title,
        ];
    @endphp

    <!-- Styles / Scripts -->
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('images/general/background-hero.webp') }}"
        type="image/webp">
    <link rel="preload" href="{{ asset('/fonts/Inter-Regular.ttf') }}" as="font" type="font/ttf"
        crossorigin="anonymous">


    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet"> --}}

    <style>
        @font-face {
            font-family: 'Inter';
            src: url('{{ asset('/fonts/Inter-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }



        body {
            font-family: "Inter", sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Dev -->
    <link rel="author" href="{{ developer()->url }}">
    <meta name="author" content="{{ developer()->name }}">
    <meta name="creator" content="{{ developer()->name }}">
    <meta name="publisher" content="{{ developer()->name }}">
    <meta name="generator" content="Laravel 12">


    <!-- General -->
    <title>{{ $resultTitle }}</title>
    <meta name="description" content="{{ $resultDescription }}">
    <meta name="application-name" content="{{ web()->title }}">
    <link rel="shortcut icon" href="{{ web()->defaultLogo }}">
    <link rel="icon" href="{{ web()->defaultLogo }}">


    <!-- Google Bot -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-video-preview:-1, max-image-preview:large, max-snippet:-1">
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- OG General  -->
    <meta property="og:title" content="{{ $resultTitle }}">
    <meta property="og:description" content="{{ $resultDescription }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:site_name" content="{{ web()->title }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ $resultThumbnail->url }}">
    <meta property="og:image:width" content="{{ $resultThumbnail->width }}">
    <meta property="og:image:height" content="{{ $resultThumbnail->height }}">
    <meta property="og:image:alt" content="{{ $resultThumbnail->alt }}">

    <!-- OG Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $resultTitle }}">
    <meta name="twitter:description" content="{{ $resultDescription }}">
    <meta name="twitter:image" content="{{ $resultThumbnail->url }}">
    <meta name="twitter:image:width" content="{{ $resultThumbnail->width }}">
    <meta name="twitter:image:height" content="{{ $resultThumbnail->height }}">
    <meta name="twitter:image:alt" content="{{ $resultThumbnail->alt }}">

    @if (request()->routeIs('travel.show') && isset($productSchema))
        @php
            $product = collect([
                '@context' => 'https://schema.org/',
                '@type' => 'Product',
                'name' => $page,
                'description' => $description,
                'image' => $resultThumbnail->url,
                'brand' => collect([
                    '@type' => 'Brand',
                    'name' => web()->title,
                ]),
                'offers' => collect([
                    '@type' => 'AggregateOffer',
                    'offerCount' => 6,
                    'lowPrice' => $productSchema['offers']['lowPrice'],
                    'highPrice' => $productSchema['offers']['highPrice'],
                    'priceCurrency' => 'IDR',
                ]),
                'review' => [
                    '@type' => 'Review',
                    'positiveNotes' => [
                        '@type' => 'ItemList',
                        'itemListElement' => [
                            [
                                '@type' => 'ListItem',
                                'position' => 1,
                                'name' => $productSchema['reviewBody'],
                            ],
                        ],
                    ],
                    'reviewBody' => $productSchema['reviewBody'],
                    'reviewRating' => [
                        '@type' => 'Rating',
                        'ratingValue' => 5,
                        'bestRating' => 5,
                    ],
                    'author' => [
                        '@type' => 'Person',
                        'name' => developer()->name,
                    ],
                ],
                'aggregateRating' => [
                    '@type' => 'AggregateRating',
                    'ratingValue' => 5,
                    'reviewCount' => 6,
                    'bestRating' => 5,
                ],
            ]);
        @endphp
        <script type="application/ld+json">

        {!! json_encode($product, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}

    </script>
    @endif



</head>

<body
    class="bg-background-secondary text-text-description-black tracking-[0.015em] antialiased w-full h-dvh !overflow-visible">

    @include('components.header')

    <main class="">
        @yield('content')
    </main>

    @include('components.footer')
    @livewireScripts



    @if (env('APP_ENV') == 'local')
        <script>
            const headings = document.querySelectorAll(':is(h2,h3)');

            let heading = ''
            headings.forEach(element => {
                heading += element.tagName.toLowerCase() + ' ' + element.textContent + '\n'
            });

            console.log(heading);
        </script>

        <script>
            let content = document.querySelector('main article #detail')
            if (content) {
                console.log("words: " + content.innerText.trim().split(/\s+/).filter(Boolean).length);
            }
        </script>
    @endif

</body>

</html>
