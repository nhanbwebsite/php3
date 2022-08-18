<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\SizeModel;
use App\Http\Requests\SizeRequest;
class SizeController extends Controller
{
    public $data = [];
    public function getAll(){
        $modelSize = new  SizeModel();
        $this -> data['listSzie'] = $modelSize -> getList();
        return view('admin.size.index',$this->data);
    }

    public function addGet(){
        return view('admin.size.addNewsize');
    }

    public function addPost(SizeRequest $res){

        $size_ = new SizeModel();
        $size_->size = $res->size;
       $result = $size_->save();
       if($result){
           return redirect(route('amin.size.addGet'))->with('addSizeSucess','Thêm size '.$res->size.' thành công');
       } else{
           return redirect(route('amin.size.addGet'))->with('addSizeFalse','Có lỗi, vui lòng kiểm tra lại !');
       }
    }

    public function getUpdatesize($id){
        $this->data['sizeById'] = SizeModel::find($id);
        return view('admin.size.update',$this->data);
    }

    public function handleUpdate(SizeRequest $res, $id){
        $size_ = SizeModel::find($id);
        $size_->size = $res->size;
        $size_->save();
        return redirect(route('admin.size.list'))->with('updateSuccess','Cập nhật size thành công');
    }

    public function handleDelete ($id){
        $size_ = SizeModel::find($id);
        $size_->delete();
        return redirect(route('admin.size.list'))->with('deleteSuccess','Xóa size thành công');
    }

}
