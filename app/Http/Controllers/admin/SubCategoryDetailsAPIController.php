<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\APISubCategoryDetails;
class SubCategoryDetailsAPIController extends Controller
{
    public $APISubCategoryDetails;
    public function __construct(){
        $this -> APISubCategoryDetails = new APISubCategoryDetails();
    }
    public function getAPISubCetegoryDetailsController(){
        $data = $this -> APISubCategoryDetails -> getSubCategoryDetails();
        return response() -> json([
            'data' => $data
        ]);
    }
}
