<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Login as LoginModel;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function loginGet(){
        return view('clients.login');
    }

    public function loginPost(LoginRequest $res){
         $user = LoginModel::where('email', $res->email)
         ->where('password',md5($res->password))
         ->first();
        if($user){
            session(['user' => $user]);
            if(session('user')['role'] == 0 || session('user')['role'] == 1){
                return redirect(route('amin.products.list'));
            } else {
                return redirect('/');
            }
        } else {
          return back()->with('loginErr','Vui lòng xem lại thông tin đăng nhập');
        }
        // return redirect('/');
    }

    public function logout(Request $request){

     if($request->session()->has('user')){
        $request->session()->exists('user');
        $request->session()->forget('user');
        return redirect(route('client.login'));
     }

    }
}
