<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    use HasFactory;

    public function getCategory_nam(){
        $data = DB::table('sub_categories')
        ->where('sub_categories.category_id','=','1')->get();
        return $data;
    }
    public function getSubCategory_nu(){
        $data = DB::table('sub_categories')
        ->where('sub_categories.category_id','=','2')->get();
        return $data;
    }
    public function getCategory_nam_details($id){
        $data = DB::table('sub_categogies_details')
        -> where('id_sub_category','=',$id)
        ->get();
        return $data;
    }
}
