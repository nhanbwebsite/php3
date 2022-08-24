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
        'user_email'
        // 'created_at',
        // 'updated_at'
    ];
    public $timestamps = false;
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

    public static function findByCodeAndEmail($code,$email){
        $data = DB::table('carttemp')
        ->where('pro_code','=', $code)
        ->where('user_email',$email)
        ->first();
        return $data;
    }



    public static function getCartTemp(){
        if(isset($_GET['uie'])){
            // echo 'sdsdsd';
            $data = DB::table('carttemp')
            ->where('user_email','=', $_GET['uie'])
            ->get();
            return $data;
        }
    }


    public function getCartTempByEmail($email){

        $data = DB::table('carttemp')
            ->where('user_email','=', $email)
            ->select('user_email')
            ->first();
            return $data;
    }

    public function deleteCartTempByEmail($email){
        DB::delete('DELETE FROM '.$this->table.' WHERE user_email = ? ',$email);
    }


    public function getQuantityCarttemp($email){
        $data = DB::table('carttemp')
                    ->select(DB::raw('SUM(pro_quantity) as totalQuantityCartTemp'))
                    // ->groupBy('pro_quantity')
                    ->where('user_email','=',$email)
                    ->first();
        return $data;
    }
}
