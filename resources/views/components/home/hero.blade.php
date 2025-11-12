<x-background-hero>
    <a target="_blank" href="{{ whatsapp() }}" rel="nofollow noindex" title="Hubungi Kami"
        class="no-underline opacity-90 text-text-description-white group bg-primary pt-0.5 w-max px-4 text-sm shadow-sm mx-auto mb-4 flex justify-center items-center rounded-full">
        Hubungi Kami
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-3 ml-1.5 group-hover:ml-2.5 group-hover:transition-all">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </a>
    <h1 class="mb-5">Jasa Travel Sumatra
        <span class="relative !z-1 whitespace-nowrap">
            <svg aria-hidden="true" viewBox="0 0 418 42" class="fill-primary absolute -bottom-2 left-0 w-full -z-1">
                <path
                    d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                </path>
            </svg>
            CV. ITW
        </span>
    </h1>
    <p class="text-text-description-white">{{ $description }}</p>
    <div class="my-7 flex-col flex sm:flex-row gap-5 justify-center items-center [&>*]:w-full [&>*]:sm:w-auto">
        <a href="{{ whatsapp() }}" target="_blank" rel="nofollow noindex" title="whatsapp"
            class="btn-secondary !bg-background-secondary text-text-description-black hover:text-text-description-white">
            Reservasi
        </a>
        <a href="#cari-rute" rel="nofollow noindex" title="whatsapp" class="btn-secondary">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mr-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>


            Cari rute travel...
        </a>
    </div>
</x-background-hero>
