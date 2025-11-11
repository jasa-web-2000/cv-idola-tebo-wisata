@php
    $originName = Str::title($origin->name);
    $destinationName = Str::title($destination->name);

    $testimonial = [
        [developer()->name, $productSchema['reviewBody']],
        [
            'Tati Winah',
            'Sempat 3/4 kali pulang pergi pake jasa ini, nyaman terasa cepat juga.
',
        ],
        [
            'Mulyanti',
            'Saya pernah menggunakan ' .
            web()->title .
            ', arah balik ke ' .
            $destinationName .
            '. Dengan demikian, di lain kesempatan, saya akan menggunakan Travel ini kembali, bersama dengan saudara. Pelayanannya ramah & supir pun demikian, bawa penumpangnya juga dengan nyaman. Selamat sampai tujuan.
',
        ],
        [
            'Agus Ferdinand',
            'Perjalanan Travel ' .
            $destinationName .
            ' ' .
            $originName .
            ' sangat memuaskan, berangkatnya tepat waktu dan driver jemput saya langsung dari rumah. Tersedia kursi di dalam dan luar untuk menunggu penumpang. Harga tiket terjangkau dan pelayanan juga oke',
        ],
        [
            'Karina',
            'Saya telah pesan carter di sini. Sangat rekomendasi!! Walaupun pesannya mendadak tetap dilayani dengan sat set sat set.',
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
        [asset('images/gallery/7.jpg'), 'Armada Travel ' . $destinationName . ' ' . $originName],
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
            <img onclick="window.open('{{ whatsapp() }}', '_blank')" src="{{ $thumbnail['url'] }}"
                class="cursor-pointer rounded-md shadow-md" title="{{ $page }}" alt="{{ $thumbnail['alt'] }}"
                width="{{ $thumbnail['width'] }}" height="{{ $thumbnail['height'] }}">
        </div>


        <div
            class="md:sticky md:top-[60px] h-fit md:col-span-4 p-3 sm:p-5 bg-background-primary rounded-md shadow-md border-b-8 border-primary [&_*]:!text-center">
            <p>Pesan <strong>{{ $page }} sekarang juga!</strong></p>

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
                Perjalanan <a href="{{ url()->current() }}"><strong>{{ $page }}</strong></a> adalah suatu hal
                yang sangat mengasikan. Kami menawarkan
                layanan berkualitas dan tentu saja yang terbaik diantara yang terbaik. Anda tidak perlu khawatir, kami
                pasti memandu dari awal pemesanan hingga anda tiba di lokasi tujuan. Bahkan kami bisa membantu anda
                untuk kepulangan juga, dengan cara cukup pesan ulang travelnya.
            </p>

            <p>
                Bagi sebagian orang, travel reguler adalah solusi transportasi darat terbaik, tercepat, termurah, dan
                tentunya ternyaman. Banyak penyedia layanan perjalanan travel dari {{ $originName }} ke
                {{ $destinationName }} ataupun sebaliknya, namun hanya kami yang paling cocok untuk anda. Dengan segala
                kelebihan dan keuntungan yang anda dapatkan jika menggunakan layanan travel dari kami.
            </p>

            <h2>Detail {{ $page }}</h2>

            <p>Sekarang, tepatnya pada hari {{ \Carbon\Carbon::parse(now())->translatedFormat('l, d F Y') }}, kami siap
                menerima pesanan travel reguler. Rute dari {{ $originName }} ke {{ $destinationName }} atau
                sebaliknya dari {{ $destinationName }} ke {{ $originName }} akan jalan bahkan jika hanya 1 penumpang
                sekalipun.
            </p>

            <p>Agar anda tidak bingung, berikut info lebih lanjut dari travel yang satu ini:</p>

            <h3>Harga Tiket Travel</h3>

            <p>Untuk rute dari {{ $originName }} ke {{ $destinationName }} memiliki harga tiket mulai dari
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['lowPrice'], in: 'IDR') }}</span>
                hingga
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['highPrice'], in: 'IDR') }}</span>
                per orang. harga ini sudah tergolong sangat murah dan cocok bagi orang-orang yang ingin hemat.
                Berdasarkan pengalaman kami, kebanyakan yang menggunakan travel dari kami adalah pelajar dan pekerja,
                maka dari itu kami menyesuaikan harga tiket travel tersebut.
            </p>

            <p>Apabila anda masih merasa ini kemahalan, silahkan negosiasi harga kepada admin kami mendapatkan titik
                tengah. jadi jangan khawatir, pasti akan kami bantu sebaik mungkin.
            </p>

            <h3>Jadwal Keberangkatan Travel</h3>

            <p>
                <a href="https://travelterdekat.web.id/travel/dari-{{ Str::slug($origin->name) }}/ke-{{ Str::slug($destination->name) }}/{{ $origin->id }}/{{ $destination->id }}"
                    target="_blank">{{ $page }}</a> siap jalan setiap hari dengan jam-jam yang fleksibel. Namun
                jika anda ingin memilih sendiri jam
                Keberangkatan maka sebaiknya hubungi admin kami. Untuk jam normalnya, kami berangkat pada jam:
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Dari {{ $originName }} Ke {{ $destinationName }}</th>
                        <th>Dari {{ $destinationName }} Ke {{ $originName }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jam 07.00 WIB</td>
                        <td>Jam 07.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 10.00 WIB</td>
                        <td>Jam 10.30 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 13.00 WIB</td>
                        <td>Jam 14.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 17.00 WIB</td>
                        <td>Jam 17.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 20.00 WIB</td>
                        <td>Jam 20.00 WIB</td>
                    </tr>
                    <tr>
                        <td>Jam 23.00 WIB</td>
                        <td>Jam 22.30 WIB</td>
                    </tr>
                </tbody>
            </table>

            <p>Bisa dibilang bahwa ada 6 sesi keberangkatan. Baik itu dari {{ $originName }} maupun pulang dari dari
                {{ $destinationName }}. Waktu kadang-kadang bisa berubah menyesuaikan kondisi, ketersediaan mobil dan
                driver. Tapi kami pastikan akan selalu ready untuk anda.
            </p>

            <h3>Mobil Travel yang Digunakan</h3>

            <p>Bagi sebagian orang, menggunakan travel harus memilih mobil/unit/armada yang cocok sesuai selera. Maka
                dari itu, kami menawarkan berbagai macam mobil yang bisa anda pilih untuk perjalanan travel:
            </p>

            <ul>
                <li>Toyota Hiace</li>
                <li>Isuzu Elf Microbus</li>
                <li>Daihatsu Luxio</li>
                <li>Suzuki APV</li>
                <li>Maxus V80</li>
                <li>Daihatsu Gran Max Minibus</li>
                <li>Toyota Innova Zenix</li>
                <li>Nissan Serena</li>
                <li>Peugeot Traveller</li>
                <li>Hyundai H-1</li>
                <li>Toyota Alphard</li>
                <li>Toyota Avanza</li>
                <li>Xenia</li>
                <li>Mitsubishi Xpander</li>
                <li>Suzuki Ertiga</li>
                <li>Honda Mobilio</li>
                <li>Wuling Confero</li>
                <li>Kia Carnival</li>
                <li>Nissan Elgrand</li>
            </ul>

            <div class="grid grid-cols-1 min-[450px]:grid-cols-2 gap-3 min-[450px]:gap-5 mb-5">
                @foreach ($gallery as $item)
                    <a href="{{ whatsapp() }}"
                        class=" rounded-lg brightness-90 hover:brightness-100 overflow-hidden">
                        <figure class="relative">

                            <img class="aspect-video object-cover" src="{{ $item[0] }}"
                                alt="{{ $item[1] }}">
                            <figcaption
                                class="absolute pt-20 pb-2 bottom-0 right-0 w-full text-center bg-gradient-to-b from-black/40 to-black/80 text-text-description-white hover:text-text-description-white">
                                {{ $item[1] }}
                            </figcaption>
                        </figure>
                    </a>
                @endforeach
            </div>

            <p>
                Tentunya semua mobil selalu kami rawat dan service. Terutama sebelum pas dipakai pasti dicuci. Tidak
                hanya itu saja, mobil memiliki bagasi luas dan AC agar penumpang tetap nyaman.
            </p>

            <h3>Fasilitas Travel Yang Didapatkan</h3>

            <p>
                Kami selalu mengutamakan keamanan dan kenyamanan para penumpang travel dari {{ $originName }} ke
                {{ $destinationName }}. Maka dari itu, tersedia berbagai
                fasilitas menarik yang bisa anda manfaatkan selama perjalanan travel.
            </p>

            <p>Berikut fasilitas yang tersedia:</p>

            <ul>
                <li>Travel door to door (antar jemput sesuai titik)</li>
                <li>Bonus makan dan minum satu kali</li>
                <li>Mobil nyaman dan ber-ac</li>
                <li>Perjalanan travel via tol penuh tanpa biaya tambahan</li>
                <li>Free bagasi 15kg</li>
            </ul>


            <h2>Penyedia Jasa Travel</h2>

            <p>
                Kami agen travel <a href="{{ route('home') }}">{{ web()->title }}</a>, yang merupakan penyedia jasa
                {{ $page }} terbaik dan terpercaya. Dengan pengalaman lebih dari {{ date('Y') - 2020 }} tahun,
                kami siap membantu perjalanan travel anda di seluruh Pulau Sumatra. Saat ini, kami memiliki berbagai
                supir dan partner travel untuk lintas Sumatra. Kami berusaha melayani travel sebaik mungkin.
            </p>

            <p>
                Bagi sebagian pencinta travel Sumatra, pasti sudah tidak asing lagi dengan nama {{ web()->title }}.
                Segala rute pasti akan dilayani dengan senang hati. Perjalanan travel setiap hari dengan banyak pilihan
                mobil.
            </p>

            <h3>Loket Travel dari {{ web()->title }}</h3>

            <p>
                Sebetulnya kami memiliki banyak cabang loket travel yang tersebar di setiap daerah di Sumatra. Berikut
                beberapa yang bisa anda kunjungi:
            </p>

            <ul>
                <li>Loket utama: {{ address()->addressLocality }}</li>
                @if ($origin->id != 1702020)
                    <li>Loket cabang: {{ Str::title($origin->name) }}</li>
                @endif
                @if ($destination->id != 1702020)
                    <li>Loket cabang: {{ Str::title($destination->name) }}</li>
                @endif
                <li>Dan masih banyak lagi di setiap daerah lengkap!</li>
            </ul>

            <p>
                Namun sekarang, anda bisa melakukan pemesanan tiket travel tanpa datang ke loket kami. Cukup dengan
                menghubungi admin via whatsapp pada nomor <a target="_blank" rel="nofollow noopener noreferrer"
                    href="tel:{{ phoneNumber(null, true) }}">{{ phoneNumber() }}</a>.
            </p>

            <h3>Layanan dari {{ web()->title }}</h3>

            <p>Kami selalu berusaha menjadi solusi transportasi darat untuk seluruh orang, terutama masyarakat Sumatra.
                Maka dari itu, kami selalu terus mengembangkan layanan yang kami tawarkan. Tidak hanya travel reguler
                saja, ada beberapa pilihan transportasi yang bisa anda pesan:

            </p>

            <ul>
                <li>Travel Reguler</li>
                <li>Carter Drop</li>
                <li>Carter PP</li>
                <li>Antar Jemput Bandara/Stasiun/Terminal/Pelabuhan</li>
                <li>Paket Wisata/Tour</li>
                <li>Sewa Mobil (Plus Driver atau Tanpa Driver)</li>
                <li>Kirim Dokumen/Paket Kilat</li>
            </ul>


            <h3>Rute Travel Lainnya Yang Ditawarkan</h3>

            <p>
                Selain {{ $page }}, ada banyak sekali rute <a href="{{ route('travel.archive') }}">Travel
                    Sumatra</a> yang kami tawarkan, bisa dikatakan sangat lengkap
                dibanding travel lain. Mulai dari ujung Aceh hingga ujung Lampung. Berikut rute travel yang mungkin
                anda suka:
            </p>


            <ul>
                @foreach ($recomendation as $item)
                    @if ($loop->index < 6)
                        <li>
                            <a
                                href="{{ route('travel.show', [
                                    'originName' => Str::slug($originName),
                                    'destinationName' => Str::slug($item->name),
                                    'originId' => $origin->id,
                                    'destinationId' => $item->id,
                                ]) }}">
                                Travel {{ $originName }} {{ Str::title($item->name) }}
                            </a>
                        </li>
                    @else
                        <li>
                            <a
                                href="{{ route('travel.show', [
                                    'originName' => Str::slug($destinationName),
                                    'destinationName' => Str::slug($item->name),
                                    'originId' => $destination->id,
                                    'destinationId' => $item->id,
                                ]) }}">
                                Travel {{ $destinationName }} {{ Str::title($item->name) }}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li>
                    <a
                        href="{{ route('travel.show', [
                            'originName' => Str::slug($destinationName),
                            'destinationName' => Str::slug($originName),
                            'originId' => $destination->id,
                            'destinationId' => $origin->id,
                        ]) }}">
                        Travel {{ $destinationName }} {{ $originName }}
                    </a>
                </li>
            </ul>


            <h2>Manfaat Menggunakan {{ $page }}</h2>

            <p>Layanan travel adalah opsi perjalanan darat dalam keadaan santai ataupun buru-buru. Kecepatan mobil
                travel dapat disesuaikan dengan kebutuhan penumpang, jika mau cepat maka bisa cepat, jika mau santai
                maka bisa santai juga. Berikut beberapa manfaat menggunakan layanan travel reguler:
            </p>

            <h3>Harga Terjangkau dan Bisa Negosiasi</h3>

            <p>Setiap rute travel, kami tawarkan dengan harga yang sangat murah. Bahkan anda bisa negosiasikan kepada
                admin jika merasa tidak cocok. Kami akan menyesuaikan! Harga travel tersedia mulai tiket mulai dari
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['lowPrice'], in: 'IDR') }}</span>
                hingga
                <span
                    class="text-green-700">{{ Number::currency($productSchema['offers']['highPrice'], in: 'IDR') }}</span>
                per orang.
            </p>

            <h3>Rute Lengkap dan Dikuasai Driver</h3>

            <p>Tersedia rute travel yang lengkap, seluruh rute di Sumatra. Salah satunya dari {{ $destinationName }} ke
                {{ $originName }} atau sebaliknya dari {{ $originName }} ke {{ $destinationName }}. Walaupun rute
                seluruh Pulau Sumatra, supir kami dijamin mumpuni dalam memilih rute. Kami memiliki banyak supir dengan
                daerah penugasan yang berbeda-beda sesuai kemampuan.
            </p>

            <h3>Sistem Door to Door</h3>

            <p>Hari ini tidak perlu datang ke garasi/loket untuk melakukan pemberangkatan. Kami langsung jemput anda
                dari rumah (door to door). Atau ke lokasi lain yang telah anda tentukan sebelumnya.
            </p>

            <h3>Perjalanan Nyaman dan Cepat</h3>

            <p>Tentu saja kami akan memberikan kenyamanan kepada penumpang travel dari {{ $originName }} ke
                {{ $destinationName }} selama perjalanan. Mobil dipersiapkan dengan bersih dan ac berfungsi. Supir
                harus bersikap ramah kepada driver. Dan perjalanan travel cepat karena akan melalui tol.
            </p>



            <h2>Testimoni Pemesananan</h2>

            <p>
                Layanan travel yang satu ini telah dipesan oleh banyak orang, dengan ulasan sebanyak
                <span class="text-green-700">6 orang</span> (ulasan positif semua) dan mendapat rating
                <span class="text-green-700">5/5</span>
                <span title="rating 5 / 5" class="rating text-xl"
                    style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ 5 * 20 }}%, rgba(163,163,163.10) {{ 5 * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </span>.
            </p>

            <p>
                Berikut testimoni pelanggan terhadap jasa travel kami:
            </p>

            @foreach ($testimonial as $item)
                <div class="bg-background-primary rounded-md shadow-md p-5 mb-7 ">
                    <blockquote class="border-l-4 border-primary">
                        <p class="italic ml-5">{{ $item[1] }}</p>
                    </blockquote>
                    <p class="!mb-0">Dari: <span class="font-semibold">{{ $item[0] }}</span></p>
                    <span>
                        Rating: {{ 5 }} / 5<span title="rating {{ 5 }} / 5"
                            class="rating text-xl"
                            style="background: linear-gradient(to right, var(--primary) 0%, var(--primary) {{ 5 * 20 }}%, rgba(163,163,163.10) {{ 5 * 20 }}%, rgba(163,163,163.10) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    display: inline-block;">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                        </span>
                    </span>


                </div>
            @endforeach

            <h2>Cara Pesan {{ $page }}</h2>

            <p>
                Pemesananan tiket travel dari {{ $originName }} kini sudah sangat mudah. Kami selalu memberikan
                kemudahan bagi calon penumpang
                kami. Jika tidak bisa datang ke loket atau anda malas ke loket, maka pesan saja secara online.
            </p>

            <p>
                Apabila anda ingin pesan tiket travel, begini tata caranya:
            </p>

            <ul>
                <li>Hubungi whatsapp {{ phoneNumber() }} atau datang ke garasi di {{ $originName }}</li>
                <li>Negosiasi harga terlebih dahulu</li>
                <li>Jika sudah cocok, maka isi formulir, baik itu yang online maupun online</li>
                <li>Anda tinggal menunggu jadwal keberangkatan, supir siap jemput dari rumah</li>
            </ul>

            <h2>Pembatalan Pemesanan/Perubahan Jadwal</h2>

            <p>Anda bisa membatalkan pesan selama H-2 keberangkatan. Sedangkan untuk perubahan jadwal selama H-1 sebelum
                keberangkatan. Pembatalan dan perubahan silahkan hubungi admin. Lalu bagaimana dengan pengembalian dana?
                Jangan khawatir, kami tidak pernah meminta pembayaran tiket di awal, pasti selalu diakhir ketika anda
                sudah tiba di lokasi tujuan.</p>

            <p>Jadi tunggu apa lagi? {{ web()->title }} siap membantu anda melakukan perjalanan travel ke
                {{ $destinationName }} kapan saja dan
                di mana saja (se Pulau Sumatra). Pesan tiket <strong>{{ $page }}</strong> anda sekarang juga!
            </p>

        </div>
    </div>
</div>
