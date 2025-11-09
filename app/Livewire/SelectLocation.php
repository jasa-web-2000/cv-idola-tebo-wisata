<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class SelectLocation extends Component
{
    public string $type;
    public string $model;
    public Collection $provinceData;

    public int $selectedProvince;
    public int $selectedRegency;
    public int $selectedDistrict;

    public Collection $regencyData;
    public Collection $districtData;



    public function mount()
    {
        $this->provinceData = province();
    }

    public function updatedSelectedProvince($value)
    {
        $this->regencyData = regency()->where('province_id', $value);
        $this->districtData = collect([]);
        $this->selectedRegency = 0;
        $this->selectedDistrict = 0;
    }

    public function updatedSelectedRegency($value)
    {
        $this->districtData = district()->where('regency_id', $value);
        $this->selectedDistrict = 0;
    }


    public function render()
    {
        return view('livewire.select-location');
    }
}
