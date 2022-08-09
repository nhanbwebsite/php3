<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class APISubCategory extends Model
{
    use HasFactory;

    public $tableSub_categories = 'sub_categories';

    public function getSubCategory(){
        $data = DB::table($this -> tableSub_categories) -> get();
        return $data;
    }

}
