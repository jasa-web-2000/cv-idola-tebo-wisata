<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'page' => 'Beranda',
            'title' => 'Travel se-Sumatra Terlengkap ' . date("Y"),
            'description' => 'Kami menawarkan jasa Travel se-Sumatra, ' . web()->tagline . ' untuk kapanpun. Kami telah menguasai rute seluruh Sumatra dan akan membantu travel anda.',
            // 'thumbnail' => [
            //     'url' => asset(web()->defaultLogo),
            //     'width' => 672,
            //     'height' => 672,
            //     'alt' => "Logo " . web()->title,
            // ],
        ]);
    }
}
