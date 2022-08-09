<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class AdminProductModel extends Model
{
    use HasFactory;

    // public function getProductsBySubCategory($id){
    //     $data = DB::table('products')
    //             ->join('sub_categories', 'sub_categories.id_sub_category','=','products.id_sub_cate')
    //             ->where('sub_categories.id_sub_category = ?',$id)
    //             ->paginate(12);
    //             return $data;
    // }

    // public function addproduct($data){
    //     DB::table('products')
    //     ->insert('INSERT INTO' .' products (product_name,product_status,product_quantity,product_img,product_details,product_desc, product_size, id_sub_cate, product_price, product_price_discount)
    //     values(?,?,?,?,?,?,?,?,?,?)',$data);
    // }
    protected $table='products';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $fillable=[
        'product_name',
        'product_status',
        'product_quantity',
        'product_img',
        'product_details',
        'product_desc',
        'product_size',
        'id_sub_cate ',
        'product_price',
        'product_price_discount',
    ];

    public function getList(){
        $data = DB::table('products')->paginate(9);
        return $data;
    }

    public function handleDeleteProduct($id){
        DB::delete('DELETE FROM products WHERE id = ? ',[$id]);
    }
}
