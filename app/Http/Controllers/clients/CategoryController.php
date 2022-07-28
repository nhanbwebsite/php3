<?php

namespace App\Http\Controllers\clients;
use App\Models\clients\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $cate;
    public function __construct(){
        $this -> cate = new Category();
    }

    public function getNam(){
       $data = $this -> cate -> getCategory_nam();
       return $data;
    }
}
