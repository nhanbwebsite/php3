<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;
    public function __construct(){
        $this -> product = new Product();
    }
    // get API
    public function index(){
      $data =  $this -> product->getAllProducts();
        return response() -> json([
            'data' => $data
        ]);
    }

  // get API
  public function getProductDetails($id){
        $data = $this -> product->getproductDetails($id);
        return response() -> json([
            'data' => $data
        ]);
  }

    public function productDetails($id){

        $data['id'] = $id;
        return view('clients.product_details',$data);
    }

    // get products by sub details

    public function getProductsBySubDetailAPI($id){
        $data = $this -> product-> getProductsBysubDetail($id);
        return response() -> json([
            'data' => $data
        ]);
    }

    public function getProductsBySubDetailClients($id){
        $data['id'] = $id;
        return view('clients.productsByCategory',$data);
    }

}
