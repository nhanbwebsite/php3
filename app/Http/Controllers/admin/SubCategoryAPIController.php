<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\APISubCategory;
class SubCategoryAPIController extends Controller
{
    public $APISubCategory_;
    public function __construct(){
        $this -> APISubCategory_ = new APISubCategory();
    }
    public function getAPISubCetegoryController(){
        $data = $this -> APISubCategory_ -> getSubCategory();
        return response() -> json([
            'data' => $data
        ]);
    }
}
