<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories.addNewCategory');
    }

    public function listCategories(){
        return view('admin.categories.index');
    }

}
