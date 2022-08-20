<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminproductRequest;
use App\Models\admin\AdminProductModel;
use App\Models\admin\AdminModelCategory;
use App\Models\admin\SizeModel;

class ProductController extends Controller
{
    public $data = [];
    public function index(){
        // $arr1 = [1,2,3,3,4,5];
        // $arr2 = [4,5,6];
        // $result = array_unique(array_merge($arr1,$arr2));
        // dd($result);
        $modelPro = new AdminProductModel();
        $this->data['dataList'] = $modelPro -> getList();
        return view('admin.products.listProducts',$this->data);
    }
    public function addGet(){
        $Size = new SizeModel();
        $Cate = new AdminModelCategory();
        $this->data['dataListCate'] = $Cate->all();

        $this->data['listSize'] =  $Size->all();

        return view('admin.products.AddProducts',$this->data);
    }

    public function addPost(AdminproductRequest $res){
        // dd($res);
        $proModel = new AdminProductModel();
        $proModel->product_name = $res -> product_name;
        $proModel->product_status = $res->status;
        $proModel->product_quantity = $res->product_quantity;
        $proModel->product_img = $res->product_img;

        $proModel->product_details = $res->product_details;
        $proModel->product_desc = $res->product_desc;
        $proModel->product_size = implode(',', $res->product_size);
        $proModel->id_sub_cate  = $res->id_sub_cate ;
        $proModel->product_price  = $res->product_price;
        $proModel->product_price_discount  = $res->product_price_discount;
        // $proModel->created_at = $res->created_at;

        // upload file

        if ($res->has('product_img')) {
            $file = $res->product_img;
            $ext = $res->product_img->extension();
            if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
                $fileUrl = $file -> getClientOriginalName();
                // $proModel->product_img = $file -> getClientOriginalName();
                $fileUrl = time() . '_' . 'product' . '.' . $ext;
                $proModel->product_img = $fileUrl;
                $file->move(public_path('clients/images/products'), $fileUrl);
                $res->merge(['product_img' => $fileUrl]);
            } else {
                return redirect(route('amin.products.addGet'))->with('errorImg','Định dạng ảnh phải là: PNG, JPG, JPEG');
            }
        }

       $result = $proModel->save();

       if($result){

        return redirect(route('amin.products.list'))->with('addSuccess','Thêm sản phẩm thành công');

      }
    }

    public function update($id){
        $this->data['proModel'] = AdminProductModel::find($id);
        $this->data['allSubcate'] = AdminModelCategory::all();
        // dd($this->data['allSubcate']);
        // dd($proModel);
        return view('admin/products/updateProducts',$this->data);
    }

    public function updatehandle(Request $res,$id){

        $proModel = AdminProductModel::find($id);
        $proModel->product_name = $res -> product_name;
        $proModel->product_status = $res->status;
        $proModel->product_quantity = $res->product_quantity;
        $proModel->product_details = $res->product_details;
        $proModel->product_desc = $res->product_desc;
        $proModel->product_size = implode(',', $res->product_size);
        $proModel->id_sub_cate  = $res->id_sub_cate ;
        $proModel->product_price  = $res->product_price;
        $proModel->product_price_discount  = $res->product_price_discount;

        if ($res->has('product_img')) {
            $proModel->product_img = $res->product_img;
            $file = $res->product_img;
            if(strlen($file -> getClientOriginalName()) > 0){
                $ext = $res->product_img->extension();
                if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
                    $fileUrl = $file -> getClientOriginalName();
                    // $proModel->product_img = $file -> getClientOriginalName();
                    $fileUrl = time() . '_' . 'product' . '.' . $ext;
                    $proModel->product_img = $fileUrl;
                    $file->move(public_path('clients/images/products'), $fileUrl);
                    $res->merge(['product_img' => $fileUrl]);
                } else {
                    return back()->with('errorImg','Định dạng ảnh phải là: PNG, JPG, JPEG');
                }
            }
        }

        $proModel->save();
        return redirect(route('amin.products.list'))->with('updateSuccess','Cập nhập sản phẩm '. $res -> product_name . ' thành công');
    }

    public function handleDelete(Request $res, $id){
        $modelPro = new AdminProductModel();
        $modelPro -> handleDeleteProduct($id);
        return redirect(route('amin.products.list'))->with('deleteSuccess','Xóa sản phẩm thành công');
    }

    // update status AJAX
    public function updateStatusProAjax(){

        if(isset($_GET['id']) && isset($_GET['status'])){

        $proModel = AdminProductModel::find($_GET['id']);
        $proModel->product_status = $_GET['status'];
        $proModel->save();
            echo 'Cập nhật trạng thái sản phẩm thành công';
        } else {
            echo 'Cập nhật trạng thái sản phẩm thát bại';
        }
    }
}

