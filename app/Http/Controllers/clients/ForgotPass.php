<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPassRequest;
use App\Models\admin\Register as RegisterModel;
use App\Mail\SendMailForgotPass;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
class ForgotPass extends Controller
{

    public function index(){
        return view('clients.forgotpass');
    }

    public function handleForgot(ForgotPassRequest $res){
        $respone = new Response();
        $data = [];
        $cookie = $respone->withCookie('resetPass',time(),5);
        $value =    $res->cookie('resetPass');
        dd($value);
        $data['email'] = $res->email;
        $data['order'] = $res->all();
         $model  = new RegisterModel();
        $check = $model->checkEmailExist($res->email);
            dd(url('forgotpass').'?id=1');
        if($check){
            $myEmail  = 'nhanbpc01368@fpt.edu.vn';

            \Mail::to($myEmail)->send(new SendMailForgotPass($data,'Quên mật khẩu','clients.dataSendForgot'));
        } else{
            return back() -> with('errorEmailExist','Tài khoản Email này chưa đăng ký thành viên hệ thống, vui lòng kiểm tra lại !');
        }

    }

    public function resetPass(){
            return view('clients.confirmResetPass');
    }
}
