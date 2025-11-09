<?php

namespace App\View\Components\Travel\Archive;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TravelGrid extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $thumbnail,
        public string $title,
        public string $url,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.travel.archive.travel-grid');
    }
}
