<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPassRequest;
use App\Models\admin\Register as RegisterModel;
use App\Mail\SendMailForgotPass;
class ForgotPass extends Controller
{
    public function index(){
        return view('clients.forgotpass');
    }

    public function handleForgot(ForgotPassRequest $res){
        $model  = new RegisterModel();
        $check = $model->checkEmailExist($res->email);
        if($check){
            $myEmail  = 'nhanbpc01368@fpt.edu.vn';

            \Mail::to($myEmail)->send(new SendMailForgotPass($res->email));
        } else{
            return back() -> with('errorEmailExist','Tài khoản Email này chưa đăng ký thành viên hệ thống, vui lòng kiểm tra lại !');
        }

    }
}
