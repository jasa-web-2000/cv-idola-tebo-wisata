<?php

namespace App\Http\Controllers;

use claviska\SimpleImage;

class ThumbnailController extends Controller
{
    public function __invoke($text)
    {
        $lines = $text;
        $image = new SimpleImage('images/general/thumbnail.jpg');

        if (!is_array($text)) {
            $wrappedText = wordwrap($text, 10, "\n");
            $lines = explode("\n", $wrappedText);
        }

        // title
        foreach ($lines as $key => $item) {
            $image->text($item, [
                'shadow' => [
                    'x' => 5,
                    'y' => 5,
                    'color' => '#2e2d2d'
                ],
                'color' => 'white',
                'size' => 90,
                'yOffset' =>  -200 + ($key * 130),
                'fontFile' => public_path('fonts/Inter-Regular.ttf'),
            ]);
        }

        // phone
        $image->text(phoneNumber(), [
            'shadow' => [
                'x' => 5,
                'y' => 5,
                'color' => '#929292'
            ],
            'color' => 'black',
            'size' => 57,
            'yOffset' => 218,
            'fontFile' => public_path('fonts/Inter-Regular.ttf'),
        ]);

        $imageData = $image->toDataUri(null, 15);

        return response()->make(file_get_contents($imageData), 200, [
            'Content-Type' => 'image/jpeg',
        ]);
    }
}
