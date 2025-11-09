<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProvinceController extends Controller
{
    public $data;

    public function __construct()
    {
        $jsonFilePath = storage_path('/app/public/data/provinces.json');
        $json = File::get($jsonFilePath);

        $resultData = json_decode($json);
        $this->data = collect($resultData);
    }


    public function __invoke()
    {
        return $this->data;
    }
}
