<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexSitemapController extends Controller
{
    public function __invoke()
    {
        $result = [route('sitemap.index'), route('sitemap.page'), route('sitemap.archive')];

        return xml($result);
    }
}
