<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\SearchFormRequest;

class SearchFormController extends Controller
{
    public function __invoke(SearchFormRequest $request)
    {
        $validated = $request->validated();

        $originId = $validated['origin_district'] ?? $validated['origin_regency'] ?? $validated['origin_province'];

        $destinationId = $validated['destination_district'] ?? $validated['destination_regency'] ?? $validated['destination_province'];


        $originName = location($originId)->name;
        $destinationName = location($destinationId)->name;

        $params = [
            'originId' => $originId,
            'destinationId' => $destinationId,
            'originName' => Str::slug($originName),
            'destinationName' => Str::slug($destinationName),
        ];

        return redirect()->to(route('travel.show', $params));
    }
}
