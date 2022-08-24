<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPassRequest;
use App\Models\admin\Register as RegisterModel;
use App\Mail\SendMailForgotPass;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Mail\SendMail;
use App\Http\Requests\ResetPassRequest;
use App\Models\admin\User as UserModel;
class ForgotPass extends Controller
{



    public function index(){
        return view('clients.forgotpass');
    }

    public function reset(){
        $data = [];
       $data['dataEmail'] = Cookie::get('resetPass');
       $data['dataCode'] = Cookie::get('code');
       \Mail::to($data['dataEmail'])->send(new SendMail(['codeReset'=>$data['dataCode']],'Quên mật khẩu','clients.codeReset'));
        return view('clients.resetPass',$data);
    }
    public function resetPost(ResetPassRequest $res){
        $data = [];
        $data['dataEmail'] = Cookie::get('resetPass');
        $data['dataCode'] = Cookie::get('code');

        $userModel = new UserModel();

        if($res-> pass == $res->confirmPass ){
            if($res->code == $data['dataCode']){
                $dataUpdate = [
                    md5($res->pass),
                    $res->email
                ];

                $update = $userModel->updateUserByEmail($dataUpdate);
                // dd($update);
                return redirect(route('client.login'))->with('updateSuccess','Cập nhật mật khẩu thành công, đăng nhập ngay ^^');
            } else{
                return back()->with('codeErr','Mã xác nhận không đúng, vui lòng kiểm tra lại !');
            }
        } else{
            return back()->with('confirmErrr','Mật khẩu xác nhận không đúng, vui lòng kiểm tra lại !');
        }
            return view('clients.resetPass',$data);
    }


    public function handleForgot(ForgotPassRequest $res){

          $data = [];
          Cookie::queue('resetPass', $res->email, 5);
          Cookie::queue('code', time(), 5);
        // $cookie = cookie('resetPass', time(),5,'/');
        // $value = Cookie::get('resetPass');

        $data['email'] = $res->email;
        $data['order'] = $res->all();
         $model  = new RegisterModel();
        $check = $model->checkEmailExist($res->email);
        if(!$check){
            return back() -> with('errorEmailExist','Tài khoản Email này chưa đăng ký thành viên hệ thống, vui lòng kiểm tra lại !');
        }
        return redirect(route('client.resetPass'));

    }


}
