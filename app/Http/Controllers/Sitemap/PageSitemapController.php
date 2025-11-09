<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageSitemapController extends Controller
{
    public function __invoke()
    {
        $result = [];
        foreach (menu() as $key => $item) {
            $result[$key] = $item[0];
        }

        // hapus terkahir
        array_pop($result);

        return xml($result);
    }
}
