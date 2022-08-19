<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Register as RegisterModel;
use App\Http\Requests\RegisterRequest;
class RegisterController extends Controller
{
    public function registerGet(){

        return view('clients.register');

    }

    public function registerPost(RegisterRequest $res){
        $model = new RegisterModel();
        $model->fullname = $res->fullname;
        $model->email  = $res->email ;
        $model->password = md5($res->password);
        $model->address = $res->address;
        $model->phone = $res->phone;
        $model->fullname = $res->fullname;
        $confirm = $res -> confirm_password;
        if($confirm == $res->password){
            $model->save();
            return redirect(route('client.login'))->with('registered','Đăng ký thành công, đăng nhập ngay');
        }
    }



}
