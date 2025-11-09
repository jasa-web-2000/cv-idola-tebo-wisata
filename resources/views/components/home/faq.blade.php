@php
    $faq = [
        [
            'question' => 'Apakah <i>"' . web()->title . '"</i> Travel Resmi?',
            'answer' =>
                'Ya, tentu saja! <i>"' .
                web()->title .
                '"</i> merupakan layanan travel resmi yang telah berpengalaman melayani berbagai kebutuhan transportasi untuk ' .
                web()->tagline .
                '. Dengan izin operasional lengkap dan tim profesional, kami selalu berkomitmen memberikan perjalanan yang aman, nyaman, dan terpercaya bagi setiap pelanggan.',
        ],
        [
            'question' => 'Berapa Harga Travel?',
            'answer' =>
                'Tarif travel kami menyesuaikan dengan rute dan lokasi penjemputan atau tujuan Anda. Kami selalu berusaha memberikan harga kompetitif tanpa mengurangi kualitas layanan. Untuk mengetahui harga terbaru dan promo yang sedang berlaku, silakan hubungi admin kami melalui WhatsApp.',
        ],
        [
            'question' => 'Tersedia Mobil Travel Apa Saja?',
            'answer' =>
                'Kami menyediakan berbagai jenis armada yang siap mengantar Anda ke mana pun dengan nyaman. Semua kendaraan dilengkapi AC dan rutin diservis. Pilihan armada kami meliputi Avanza, Xenia, Calya, Innova, Hiace, Elf Long, Elf Short, Luxio, Gran Max, Pregio, Travello, Mobilio, Ertiga, APV, Fortuner, Pajero Sport, dan masih banyak lainnya.',
        ],
        [
            'question' => 'Garasi Travel Ada Di Mana?',
            'answer' =>
                'Garasi utama kami berlokasi di ' .
                address()->streetAddress .
                '. Selain itu, karena ' .
                web()->title .
                ' adalah agen travel terpercaya, kami juga bekerja sama dengan banyak mitra di berbagai kota untuk menjangkau pelanggan lebih luas.',
        ],
        [
            'question' => 'Bagaimana Cara Pesan Tiket?',
            'answer' =>
                'Untuk memesan tiket sangat mudah dan fleksibel. Anda bisa melakukan pemesanan secara langsung di lokasi kami atau secara online melalui WhatsApp. Cukup isi data penumpang serta detail lokasi penjemputan dan tujuan, tim kami akan segera memproses pesanan Anda.',
        ],
        [
            'question' => 'Bisa Melakukan Reschedule & Refund?',
            'answer' =>
                'Perubahan jadwal atau reschedule sebaiknya dilakukan minimal satu hari sebelum keberangkatan agar penyesuaian bisa dilakukan dengan lancar. Untuk refund, kami memberikan kebijakan pengembalian penuh (100%) apabila sesuai dengan ketentuan yang berlaku. Umumnya, kami tidak meminta DP saat pemesanan untuk memudahkan pelanggan.',
        ],
    ];

@endphp

<div class="bg-background-primary">

    <div class="my-container text-center py-20">
        <x-sub-heading subTitle='FAQ Travel' description='Beberapa hal yang sering ditanyakan para penumpang.' />

        <ul
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 md:gap-x-14 lg:gap-x-20 [&>li>div]:gap-x-3 [&>li>div]:flex [&>li>div]:items-start [&>li>div]:mb-5 [&_.icon-faq]:flex [&_.icon-faq]:items-center [&_.icon-faq]:justify-center [&_.icon-faq]:p-3 [&_.icon-faq]:rounded-full [&_.icon-faq]:simple-gradient [&_.icon-faq]:shadow-md [&_.icon-faq]:text-text-description-white [&_svg]:size-6">
            @foreach ($faq as $item)
                <li class="text-left mb-10">
                    <div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                        <div class="bg-background-secondary rounded-md py-5 px-7 w-full flex items-center">
                            <h3 class="">{!! $item['question'] !!}</h3>
                        </div>
                    </div>

                    <div>
                        <div class="bg-primary/5 border-b-8 border-primary rounded-md py-5 px-7 w-full">
                            <p class="text-text-description-black text-justify">{!! $item['answer'] !!}</p>
                        </div>
                        <div class="icon-faq">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>

                        </div>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>

</div>
