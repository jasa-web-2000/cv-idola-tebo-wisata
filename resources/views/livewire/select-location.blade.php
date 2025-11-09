<div class="">
    <x-travel.archive.select-location model="selectedProvince" id="{{ $type }}_province" :data="$provinceData"
        label="Provinsi {{ $type == 'origin' ? 'asal' : 'tujuan' }}" />
    <x-travel.archive.select-location model="selectedRegency" id="{{ $type }}_regency" :data="$regencyData"
        label="Kab/kota {{ $type == 'origin' ? 'asal' : 'tujuan' }}" />
    <x-travel.archive.select-location model="selectedDistrict" id="{{ $type }}_district" :data="$districtData"
        label="Kecamatan {{ $type == 'origin' ? 'asal' : 'tujuan' }}" />

</div>
