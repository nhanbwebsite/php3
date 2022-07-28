<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Categories;

class CategoriesController extends Controller
{
    public $cate;
    public function __construct(){
        $this -> cate = new Categories();
    }

    public function getNam(){
       $data = $this -> cate -> getCategory_nam();
       return $data;
    }
}
