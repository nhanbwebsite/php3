<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wards;
class APIWardsController extends Controller
{
    public $wards;

    public function __construct(){
        $this -> wards = new Wards();
    }

    public function getWardsAPI(){
        $data = $this -> wards -> getWards();
            return response() ->json([
                'data' => $data
            ]);
    }
}
