<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {

        if($this->check() == false){
            if(isset($_SESSION['user'])){
                session_unset(session('user'));
            }
            return redirect(route('client.login'));
        }

        return $next($request);
    }

    public function check(){
        if(session('user')){
            if(session('user')['role'] == 0 || session('user')['role'] == 1){
                return true;
            }
        }

        return false;

    }
}
