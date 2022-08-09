<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model API category

use App\Models\admin\APIcategory;

class CategoryAPIController extends Controller
{
    public $categoryModel;
    public function __construct(){
        $this -> categoryModel = new APIcategory();
    }
    public function getAPICetegoryController(){
        $data = $this -> categoryModel -> getCategory();
        return response() -> json([
            'data' => $data
        ]);
    }
}
