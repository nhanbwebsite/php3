<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductDetailsRequest;
use App\Models\clients\CartTemp as CartTempModel;
class ProductController extends Controller
{
    public $data = [];
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

  // get API details products
  public function getProductDetails($id){
        $data = $this -> product->getproductDetails($id);
        return response() -> json([
            'data' => $data
        ]);
  }

    public function productDetails($id){

        $data['id'] = $id;
        $data['productDetails'] = Product::find($id);
        $data['listSize'] = explode(',',$data['productDetails']->product_size);
        return view('clients.product_details',$data);
    }

    // get products by sub details

    public function getProductsBySubDetailAPI($id){
        $data = $this -> product-> getProductsBysubDetail($id);
        return response() -> json([
            'data' => $data
        ]);
    }


    public function getProductsBySubCategory($id){
        $data = $this -> product-> getProductsSubCategory($id);
        return response() -> json([
            'data' => $data
        ]);
    }

    public function getProductsDisscount(){
        $data = $this->product-> productsPriceDissCount();
        return response() -> json([
            'data' => $data
        ]);
    }
    public function getProductsNew(){
        $data = $this->product-> productsNew();
        return response() -> json([
            'data' => $data
        ]);
    }

    public function getProductsBySubDetailClients($id){
        $data['id'] = $id;
        return view('clients.productsByCategory',$data);
    }

    public function productsByCategory($id){
        $this->data['id'] = $id;
        return view('clients.productsByCategory',$this->data);
    }
    // not API

    public function getProductsBySubCate($id){
        $this->data['listProBySubCate'] = $this->product -> getProductsSubCategory($id);
        return view('clients.productsByCategory',$this->data);
    }

    public function getAllproducts(){
        $this->data['allProducts'] = Product::AllProducts();
        return view('clients.products',$this->data);
    }

// cart
    public function addCart(ProductDetailsRequest $res,$id){
        // đã đăng nhập
       if( $res->session()->has('user')){
            $CartTemp = new CartTempModel();
            $CartTemp->user_id = $res->session()->get('user')->id;
            $CartTemp->pro_id = $res->product_id_post;
            $CartTemp->pro_code = $res->pro_code_post;
            $CartTemp->pro_name = $res->product_name_post;
            $CartTemp->pro_price = $res->price_post;
            $CartTemp->pro_image = $res->product_image_post;
            $CartTemp->pro_quantity = $res->quatity;
            // $CartTemp->data_create = Now();
            // dd($res->all());
        $checkProExist = $CartTemp::getCartTempByIdEndCode($res->product_id_post,$res->pro_code_post);
        if($checkProExist > 0){
            $dataCheckExist = $CartTemp::findByCode($res->pro_code_post);
            if($dataCheckExist){
                $CartTemp =   $CartTemp::find($dataCheckExist->id);
                $CartTemp->pro_quantity = $CartTemp->pro_quantity + $res->quatity;
                $CartTemp->save();
                return back()->with('addCartSuccess','Thêm sản phẩm vào giỏ hàng thành công ^^');
            }
        }

            $CartTemp->save();
            return back()->with('addCartSuccess','Thêm sản phẩm vào giỏ hàng thành công ^^');
       }

    //   chưa đăng nhập
    }

    public function getCartTempAPI(){
        $data = CartTempModel::getCartTemp();
        return response() -> json([
            'data' => $data
        ]);

    }

    public function updateValueNumberCart(Request $res){

        if(isset($_GET['id']) && isset($_GET['pro_quantity'])){

             $cart = CartTempModel::find($_GET['id']);
             $cart->pro_quantity =  $_GET['pro_quantity'];
             $cart->save();

        }
        // $data = CartTempModel::getCartTemp();
    }
    public function deleteCartTemp(Request $res){

        if(isset($_GET['iPro'])){

             $cart = CartTempModel::find($_GET['iPro']);
             $cart->delete();
        }
        // $data = CartTempModel::getCartTemp();
    }
}
