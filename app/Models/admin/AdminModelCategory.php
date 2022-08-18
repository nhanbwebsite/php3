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

    public function getAllCategory(){
        $Subcategories = DB::table($this -> subTable)->paginate(9);
        return $Subcategories;
    }

    public function getAllCategoryForAdd(){
        $categories = DB::table($this -> categories)->get();
        return $categories;
    }
    // lấy thông tin danh mục theo id
    public function getCategoryById($id){
        $sub_category =   DB::select('SELECT * FROM '.$this->subTable.' WHERE id = ? ',[$id]);
        return $sub_category;
    }

    public function addCategory($data){
     DB::insert('INSERT INTO '. $this -> subTable .'(sub_category_name,category_id) values(?,?)',$data);
    }

    public function handleEditCategory($data){
        DB::update('UPDATE '. $this -> subTable . ' SET sub_category_name = ? WHERE id = ? ',$data);
    }

    public function hendleDeleteCategory($id){
        DB::delete('DELETE FROM '.$this->subTable.' WHERE id = ? ',$id);
    }

    public function addSubCategorydetail($data){
        DB::insert('INSERT INTO '. $this -> subTable .'(sub_detail_name,id) values(?,?)',$data);
    }

    protected $table='sub_categories';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $fillable=[
        'sub_category_name',
    ];


}
