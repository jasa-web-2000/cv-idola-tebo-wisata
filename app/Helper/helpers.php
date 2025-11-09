<?php

use Illuminate\Support\Str;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\DistrictController;

if (! function_exists('mail')) {
    function mail(?string $mail = null, bool $link = false)
    {
        $resultMail = $mail ?? 'admin@cvidolatebowisata.com';

        return $resultMail;
    }
}

if (! function_exists('phoneNumber')) {
    function phoneNumber(?string $phoneNumber = null, bool $link = false)
    {
        // $resultPhoneNumber = $phoneNumber ?? validationPhoneNumber();
        $resultPhoneNumber = $phoneNumber ?? '+62 813-7466-1216';

        return $link ? str_replace(['-', '+', ' '], '', $resultPhoneNumber) : $resultPhoneNumber;
    }
}

// if (! function_exists('validationPhoneNumber')) {
//     function validationPhoneNumber()
//     {
//         $originId = request()->route('originId');
//         $destinationId = request()->route('destinationId');

//         // Fungsi bantu untuk cek apakah ID termasuk dalam rentang wilayah tertentu
//         $inRange = function ($id, $ranges) {
//             foreach ($ranges as [$min, $max]) {
//                 if ($id >= $min && $id <= $max) {
//                     return true;
//                 }
//             }
//             return false;
//         };

//         // Rentang ID untuk Sumatra
//         $sumatraRanges = [
//             [11, 21],           // Provinsi
//             [1101, 2172],       // Kota
//             [110101, 217204],   // Kecamatan
//         ];

//         // Rentang ID untuk Jawa
//         $jawaRanges = [
//             [31, 51],           // Provinsi
//             [3101, 5171],       // Kota
//             [310101, 517104],   // Kecamatan
//         ];

//         $kalimantanRanges = [
//             [61, 65],           // Provinsi
//             [6101, 6571],       // Kota
//             [610101, 657104],   // Kecamatan
//         ];

//         $sulawesiRanges = [
//             [71, 76],           // Provinsi
//             [7101, 7606],       // Kota
//             [710105, 760605],   // Kecamatan
//         ];

//         $jawa = $inRange($originId, $jawaRanges) || $inRange($destinationId, $jawaRanges);

//         $sumatra = $inRange($originId, $sumatraRanges) || $inRange($destinationId, $sumatraRanges);

//         $kalimantan = $inRange($originId, $kalimantanRanges) || $inRange($destinationId, $kalimantanRanges);

//         $sulawesi = $inRange($originId, $sulawesiRanges) || $inRange($destinationId, $sulawesiRanges);

//         if ($jawa) {
//             return '+62 899-0704-308';
//         } elseif ($sumatra) {
//             return '+62 812-1156-3500';
//         } elseif ($kalimantan) {
//             return '+62 857-9190-4615';
//         } elseif ($sulawesi) {
//             return '+62 857-0518-0556';
//         } else {
//             return '+62 821-3087-7954';
//         }
//     }
// }

if (! function_exists('whatsapp')) {
    function whatsapp(?string $phoneNumber = null, ?string $message = null)
    {
        $phoneNumber = phoneNumber($phoneNumber, true);

        $resultMessage = $message ?? "Halo admin *_" . web()->title . "_*\n" . request()->fullUrl();
        $encodedMessage = urlencode($resultMessage);

        return "https://api.whatsapp.com/send/?phone=$phoneNumber&text=$encodedMessage&type=phone_number&app_absent=0";
    }
}


if (! function_exists('web')) {
    function web()
    {
        $data = [
            "title" => env('APP_NAME'),
            "tagline" => "Jadwalkan travel anda bersama " . env('APP_NAME'),
            "transparentLogo" => asset('images/general/travel-sumatra.gif'),
            "defaultLogo" => asset('images/general/travel-sumatra.jpg'),
        ];

        return (object) $data;
    }
}

if (! function_exists('address')) {
    function address()
    {
        $data = [
            'streetAddress'   => 'Simpang 4 Ketaping/Simpang 4 kampus Unand by pass, Jl. By Pass, Ps. Ambacang, Kec. Kuranji, Kota Padang, Sumatera Barat 25151',
            'addressLocality' => 'Kota Padang',
            'addressCountry'  => 'ID',
            'addressRegion'   => 'Sumatera Barat',
            'postalCode'      => '25151',
            'iframe'          => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2878781622044!2d100.39912190000001!3d-0.9342968999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90d035ae6bb%3A0x482982fb1bf7d526!2sTravel%20padang%20medan%20sibolga%20lahat%20lampung%20palembang%20jambi%20tebo%20bungo%20rimbo%20bangka%20belitung%20pagar%20alam%20lubuk%20linggau%20bengkulu!5e0!3m2!1sid!2sid!4v1762590153550!5m2!1sid!2sid',
            'linkAddress' => 'https://maps.app.goo.gl/QFf5kD8RfDz45HXK6',
        ];

        return (object) $data;
    }
}

if (! function_exists('developer')) {
    function developer()
    {
        $data = [
            "name" => "Dion Zebua",
            "url" => "https://dionzebua.com"
        ];

        return (object) $data;
    }
}



// 



if (! function_exists('province')) {
    function province()
    {
        $province = (new ProvinceController())->data;
        return $province;
    }
}

if (! function_exists('regency')) {
    function regency()
    {
        $regency = (new RegencyController())->data;
        return $regency;
    }
}
if (! function_exists('district')) {
    function district()
    {
        $regency = (new DistrictController())->data;
        return $regency;
    }
}
if (! function_exists('location')) {
    function location($id, $name = null)
    {
        $data = null;
        if ($id <= 94) {
            $data = province()->where('id', $id)->first();
        } elseif ($id <= 9471) {
            $data = regency()->where('id', $id)->first();
        } else {
            $data = district()->where('id', $id)->first();
        }

        if ($data && $name && Str::slug($data->name) != $name) {
            return null;
        }

        return $data;
    }
}

if (! function_exists('menu')) {
    function menu()
    {
        $data = [
            [route('home'), "Beranda"],
            [route('travel.archive'), "Travel"],
            [route('gallery'), "Galeri"],
            [route('contact'), "Kontak"],
            [route('sitemap.index'), "Sitemap"],
        ];

        return (object) $data;
    }
}

if (! function_exists('xml')) {
    function xml($data)
    {
        $xml = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        foreach ($data as $url) {
            $urlElement = $xml->addChild('url');
            $urlElement->addChild('loc', $url);

            // $urlElement->addChild('lastmod', now()->toAtomString());
            // $urlElement->addChild('changefreq', 'daily');
            // $urlElement->addChild('priority', '0.9');
        }

        $xmlString = $xml->asXML();

        return response($xmlString, 200)
            ->header('Content-Type', 'application/xml');
    }
}

if (!function_exists('rupiah')) {
    function rupiah($angka)
    {
        // $formatter = new \NumberFormatter('id_ID', \NumberFormatter::CURRENCY);
        // return $formatter->formatCurrency($angka, 'IDR');
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}
