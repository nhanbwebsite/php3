<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminCategoryRequest;

use App\Models\admin\AdminModelCategory;
class CategoryController extends Controller
{
    public $data = [];
    public $adminModelCategory;
    public function __construct(){
      $this ->adminModelCategory = new AdminModelCategory();
    }
    public function index(Request $request){

        $this -> data['categoryParent']  = $this -> adminModelCategory -> getAllCategoryForAdd();
        // dd($this -> data['categoryParent']);
        return view('admin.categories.addNewCategory',$this->data);
    }

    public function listCategories(){

    $this -> data['categories']  = $this -> adminModelCategory -> getAllCategory();
        return view('admin.categories.index',$this ->data);
    }

    public function addPost(AdminCategoryRequest $res){


        $data = [
            $res -> category_name,
            $res->	categoryParent
        ];
       $this -> adminModelCategory -> addCategory($data);

      return redirect(route('amin.category.list')) -> with('addSuccess','Thêm danh mục thành công ^^');
    }

    public function edit($id){
      $this -> data['category'] = $this -> adminModelCategory -> getCategoryById($id);
        return view('admin.categories.EditCategory',$this -> data);
    }

    public function handleEdit(Request $res ){
        // dd($res);
        $data = [
            $res -> sub_category_name_edit,
            $res -> sub_category_id,
        ];
        $this ->adminModelCategory -> handleEditCategory($data);
        return redirect(route('amin.category.list')) -> with('editSuccess','Cập nhật danh mục thành công');
    }

    public function handleDeleteCategory($id){
        $data = [
            $id
        ];
        $this->adminModelCategory ->hendleDeleteCategory($data);
        return redirect(route('amin.category.list')) -> with('deleteSuccess','Xóa danh mục thành công');
    }
}
