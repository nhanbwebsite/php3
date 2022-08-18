<?php

namespace App\Http\Controllers\clients;
use App\Models\clients\Product as ProductModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    public function index(){
        $this->data['ListProductNew'] = ProductModel::productsNew();
        $this->data['ListProductDiscount'] = ProductModel::productsPriceDissCount();
        return view('clients/home',$this->data);
    }
}
