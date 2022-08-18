<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\admin\User as UserModel;
class UserController extends Controller
{

    public $data = [];

    public function index(){
        $this->data['listUser'] = UserModel::all();
        return view('admin.user.listUser',$this->data);
    }

    public function updateUser($id){
        $this->data['userById'] = UserModel::find($id);
        return view('admin.user.update',$this->data);
    }

    public function handelUpdate(Request $request,$id){
        $model = UserModel::find($id);
        $model->fullname = $request->fullname;
        $model->email = $request->email;
        $model->address = $request->address;
        $model->phone = $request->phone;
        $model->save();
        return redirect(route('amin.user.list'))->with('updateSucess','Cập nhật tài khoản '.$request->email . ' thành công');
    }

    public function deleteUser($id){
        $model = UserModel::find($id);
        $model->delete();
        return redirect(route('amin.user.list'))->with('deleteSuccess',' Xóa thành công');
    }

    public function addGet(){
        return view('admin.user.AddUser');
    }

    public function addPost(UserRequest $res){

        $model = new UserModel();
        $model->fullname = $res->fullname;
        $model->email  = $res->email ;
        $model->password = $res->password;
        $confirm_pass = $res->confirm_pass_word;
        $model->address = $res->address;
        $model->phone = $res->phone;
        $model->role = $res->role;

        $chekMail = $model->checkEmail($res->email);
        if($chekMail == false) {
            if($confirm_pass == $res->password){
                $model->save();
                return redirect(route('amin.user.list'))->with('addSuccess',' Thêm user '.  $res->email .' thành công');
            } else{
                foreach($res->all() as $key => $item){
                    $res->session()->flash($key,$item);
                }
                return back()->with('confirm_pass_err','Mật khẩu không khớp, vui lòng xác nhận lại mật khẩu');
            }
        } else{
            foreach($res->all() as $key => $item){
                $res->session()->flash($key,$item);
            }
            return back()->with('errEmail','Email đã tồn tại, vui lòng dùng email khác !');
        }

    }
}

