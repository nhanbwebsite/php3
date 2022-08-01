<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminCategoryRequest;

use App\Models\admin\AdminModelCategory;
class CategoryController extends Controller
{
    public $adminModelCategory;
    public function __construct(){
      $this ->adminModelCategory = new AdminModelCategory();
    }
    public function index(){
        return view('admin.categories.addNewCategory');
    }

    public function listCategories(){
        return view('admin.categories.index');
    }

    public function addPost(AdminCategoryRequest $res){
        $data = [
            $res -> category_name
        ];
      $inset =  $this -> adminModelCategory -> addCategory($data);
      if($inset){
            return redirect('amin.category.list') -> with('success','Thêm danh mục thành công');
      };

      return back() -> with('msg','Thêm danh mục thất bại, vui lòng kiểm tra lại !');
    }

    public function edit($id){
        $category = $this -> adminModelCategory -> getCategoryById($id);
        return view('admin.categories.EditCategory',$category);
    }
    public function handleEdit(AdminCategoryRequest $res, $id){

    }
}
