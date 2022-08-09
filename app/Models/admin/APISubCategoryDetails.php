<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class APISubCategoryDetails extends Model
{
    use HasFactory;
    public $tableSub_categories_details = 'sub_categories_details';

    public function getSubCategoryDetails(){
        $data = DB::table($this -> tableSub_categories_details) -> get();
        return $data;
    }
}
