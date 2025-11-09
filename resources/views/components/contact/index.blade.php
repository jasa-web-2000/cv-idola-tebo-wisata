<div class="my-container text-center">
    <x-sub-heading subTitle='Pesan Travel Terdekat Sekarang'
        description='Anda bisa pesan travel secara online melalui whatsapp.' />

    <div
        class="!text-left mt-10 content-start grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 sm:gap-x-10 md:gap-y-12 md:gap-x-20 lg:gap-x-28 lg:justify-center md:items-center">
        <div class="md:col-span-1 lg:col-span-5 lg:col-start-2">
            <x-contact.booking />
        </div>
        <x-contact.list />
    </div>

    <div class="my-space"></div>

    <div class="">
        <iframe title="alamat" src={{ address()->iframe }} allowFullScreen="true"
            class="w-full h-80 lg:h-96 brightness-35 hover:brightness-90 transition-all duration-700 shadow-lg rounded-md"></iframe>
    </div>
</div>
