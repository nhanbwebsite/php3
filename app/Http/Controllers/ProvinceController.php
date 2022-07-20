<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Province;
class ProvinceController extends Controller
{
    private $province;
    public $html;
    public function __construct(){
        $this -> province = new Province();
    }

    public function getprovince(){

        $data =   $this -> province->getProvinces();
        return $data;

    }
}

