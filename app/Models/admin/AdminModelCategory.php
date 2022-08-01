<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class AdminModelCategory extends Model
{
    use HasFactory;

    public $subTable = 'sub_categories';
    public $categories = 'categories';

    public function getAll(){
        $subCategory = DB::table($this -> subTable)->get();
        return $subCategory;
    }
    // lấy thông tin danh mục theo id
    public function getCategoryById($id){
        $category =   DB::select('SELECT * FROM '.$this->categories.' WHERE id = ? ',[$id]);
        return $category;
    }

    public function addCategory($data){
     DB::insert('INSERT INTO '. $this -> categories .'(category_name) values(?)',$data);


    }
}
