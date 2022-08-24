<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Order_table extends Model
{
    use HasFactory;

    protected $table = "order_table";
    protected $fillable = [
        'id_kh',
        'order_address',
        'order_phone',
        'order_note',
        'created_at',
        'updated_at',
        'order_status'
    ];
    public $timestamps = true;


    // find by email

    public function getUserByEmail($email){
        $data = DB::table('users')
        ->where('email','=',$email)
        ->first();
        return $data;
    }
// get order by user ID

    public function getOrderByUserEmail($email){
        $data = DB::table('carttemp')
        ->where('user_email','=',$email)
        ->get();
        return $data;
    }

    public function getProvinceById($provinceId){
        $data = DB::table('province')
        ->where('province_id','=',$provinceId)
        ->first();
        return $data;
    }
    public function getDistrictById($districtId){
        $data = DB::table('district')
        ->where('district_id','=',$districtId)
        ->first();
        return $data;
    }
    public function getWardId($wardId){
        $data = DB::table('wards')
        ->where('wards_id','=',$wardId)
        ->first();
        return $data;
    }

    public function getOrderIdByLast(){
        $data = DB::table('order_table')
                ->select('id')
                ->orderByDesc('id')
                ->limit(1)
                ->first();
        return $data;
    }

    public function getUserByOrderUserId(){
        $data = DB::table('order_table')
            ->select('order_table.*','users.fullname','users.email')
            ->join('users','order_table.id_kh','=','users.id')
            // ->join('order_details_table','order_table.id','=','order_details_table.id_order')
            ->paginate(9);
        return $data;
    }
    // public function getUserByOrderUserId(){
    //     $data = DB::table('order_table')
    //         ->select('order_table.*','users.fullname','users.email','order_details_table.order_details_pro_price','order_details_table.order_detail_quantity')
    //         ->join('users','order_table.id_kh','=','users.id')
    //         ->join('order_details_table','order_table.id','=','order_details_table.id_order')
    //         ->paginate(9);
    //     return $data;
    // }

    public function getOrderDetailsByEmails($email){
        $data = DB::table('order_table')
            ->join('users','order_table.id_kh','=','users.id')
            ->select('order_details_table.*','order_table.*','products.product_name')
            ->join('order_details_table','order_table.id','=','order_details_table.id_order')
            ->join('products','order_details_table.order_details_pro_id','=','products.id')
            ->where('users.email','=',$email)
            ->get();

        return $data;
    }
    public function getOrdersByEmails($email){
        $data = DB::table('order_table')
            // ->select('order_table.id',DB::raw('SUM(order_details_table.order_details_pro_price) as total'))
            ->join('users','order_table.id_kh','=','users.id')
            // ->join('order_details_table','order_table.id','=','order_details_table.id_order')
            // ->groupBy('order_table.id')
            ->where('users.email','=',$email)
            ->get();

        return $data;
    }

    public function getOrderDetailsByIdOrder($id_order){
        $data = DB::table('order_table')
        ->select('order_table.id','order_details_table.order_details_pro_price','order_details_table.order_detail_quantity','products.product_name','order_details_table.order_details_pro_id')
        ->join('order_details_table','order_table.id','=','order_details_table.id_order')
        ->join('users','order_table.id_kh','=','users.id')
        ->join('products','order_details_table.order_details_pro_id','=','products.id')
        // ->join('order_details_table','order_table.id','=','order_details_table.id_order')
        // ->groupBy('order_table.id')
        ->where('order_details_table.id_order','=',$id_order)
        ->get();

    return $data;
    }

}
