<div class="bg-background-primary rounded-lg shadow-md p-5 border-b-8 border-primary">
    <h3>Reservasi Tiket</h3>
    <div class="border-t border-slate-200 h-1 w-full my-3"></div>
    <form method="POST" target="_blank" action="{{ route('contact.form') }}" id="cari-rute"
        class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4 [&_label]:after:content-['*'] [&_label]:after:ml-0.5 [&_label]:after:text-danger [&_label]:line-clamp-1 [&_button]:overflow-hidden text-text-description-black ">
        @csrf

        @if ($errors->any())
            <div class="bg-danger/15 rounded-md border border-slate-400/90 text-sm p-5 col-span-full">
                <ul class="list-decimal pl-5">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Nama -->
        <div class="col-span-full">
            <label for="name">Nama
            </label>
            <input id="name" type="text" name="name" required autocomplete="off" />
        </div>

        <!-- Asal -->
        <div class="">
            <label for="origin">Asal
            </label>
            <input id="origin" type="text" name="origin" required autocomplete="off" />
        </div>

        <!-- Tujuan -->
        <div class="">
            <label for="destination">Tujuan
            </label>
            <input id="destination" type="text" name="destination" required autocomplete="off" />
        </div>

        <!-- Jumlah Penumpang -->
        <div class="col-span-full">
            <label for="ticket">Jumlah Penumpang
            </label>
            <select title="Jumlah Penumpang" id="ticket" name="ticket" required autocomplete="off" class="pr-5">
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }} Penumpang</option>
                @endfor


            </select>
        </div>

        <div class="col-span-full mt-3">
            <button class="btn-primary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>

                Kirim
            </button>
        </div>

    </form>
</div>
