<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class APIcategory extends Model
{
    use HasFactory;

    public $tableCategory = 'categories';

    public function getCategory(){
        $data = DB::table($this -> tableCategory) -> get();
        return $data;
    }

}
