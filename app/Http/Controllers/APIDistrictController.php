<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
class APIDistrictController extends Controller
{
    public $district;
    public function __construct(){
        $this -> district = new District();
    }

    public function getDistrictAPI(){
        $data = $this -> district->getDistrict();
        return response() -> json([
            'data' => $data
        ]);
    }
}
