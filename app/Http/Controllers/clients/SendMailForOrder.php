<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendMailForOrder extends Controller
{
    public $data = [];
    public function handleSendForOrder(ForgotPassRequest $res){
           $myEmail = 'nhanbpc01368@fpt.edu.vn';
            \Mail::to($myEmail)->send(new SendMailForgotPass($this->data,'Quên mật khẩu','clients.sendEmailByOrder'));

    }

    public function resetPass(){
            return view('clients.confirmResetPass');
    }
}
