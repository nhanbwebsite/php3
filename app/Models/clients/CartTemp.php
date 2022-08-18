<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class CartTemp extends Model
{
    use HasFactory;
    protected $table = "carttemp";
    protected $fillable = [
        'user_id',
        'pro_id',
        'pro_code',
        'pro_name',
        'pro_price',
        'pro_image',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
    public static function getCartTempByIdEndCode($id,$code){
            $data = DB::table('carttemp')
            ->where('pro_id','=',$id)
            ->where('pro_code','=',$code)
            ->count();
            return $data;
    }

    public static function findLast(){
        $data = DB::table('carttemp')
        ->orderByDesc('id')
        ->first();
        return $data;
    }

    public static function findByCode($code){
        $data = DB::table('carttemp')
        ->where('pro_code','=', $code)
        ->first();
        return $data;
    }

    public static function getCartTemp(){
        if(isset($_GET['uid'])){

            $data = DB::table('carttemp')
            ->where('user_id','=', $_GET['uid'])
            ->get();
            return $data;
        }
    }



}
