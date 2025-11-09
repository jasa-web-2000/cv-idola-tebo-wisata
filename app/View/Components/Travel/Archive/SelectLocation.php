<?php

namespace App\View\Components\Travel\Archive;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class SelectLocation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $model,
        public string $label,
        public ?Collection $data,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.travel.archive.select-location', [
            'data' => $this->data,
        ]);
    }
}
