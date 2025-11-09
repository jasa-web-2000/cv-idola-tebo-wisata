<?php

namespace App\Http\Controllers\Sitemap;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchiveTravelSitemapController extends Controller
{
    public function __invoke()
    {
        $allData = collect([...province(), ...regency(), ...district()]);

        $result = $allData->map(function ($item) {
            return route('sitemap.single', [
                'name' => Str::slug($item->name),
                'id' => $item->id,
            ]);
        });

        return xml($result);
    }
}
