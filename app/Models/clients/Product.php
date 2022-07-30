<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    use HasFactory;
    use HasFactory;
    //  lấy tất cả sản phẩm - mới nhất -> cũ nhất
        public function getAllProducts(){
            $data = DB::table('products')->join('image_products', 'products.id','=','image_products.id_product')
            ->orderBy('products.id','desc')
            ->get();
            return $data;
        }
    // 4 sản phẩm mới nhất
        public function getProductsLimit(){
            $data = DB::table('products')->join('image_products', 'products.id','=','image_products.id_product')
            -> join('product_details','product_details.product_id','=','products.id')
            ->orderBy('products.id','desc')
            ->limit(4)
            ->get();
            return $data;
        }

        public function getProductsByIdSubcategory($id){
            $data = DB::table('products')->join('image_products', 'products.id','=','image_products.id_product')
            -> join('product_details','product_details.product_id','=','products.id')
            -> join('categories','products.category_id','=','categories.id')
            ->join('sub_categogies','categories.id','=','sub_categogies.id_sub_category')
            ->where('sub_categogies.id_sub_category','=',$id)
            ->get();
            return $data;
        }

        public function getproductDetails($id){
            $data = DB::table('products')
            ->join('image_products', 'products.id','=','image_products.id_product')
            -> join('product_details','product_details.product_id','=','products.id')
            ->where('products.id','=',$id) ->get();
            return $data;
        }

        //  sub details
        public function getProductsBysubDetail($id){
           $data = DB::table('products') -> select('products.*','image_products.*','sub_categogies_details.*')
           -> join('sub_categogies_details','products.id_sub_cate_details','=','sub_categogies_details.id_sub_detail')
           ->join('image_products', 'products.id','=','image_products.id_product')
           -> where('sub_categogies_details.id_sub_detail','=',$id) -> get();
           return $data;
        }
}
