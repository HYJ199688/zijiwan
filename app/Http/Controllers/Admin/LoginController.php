<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }

    /**
     * 重写登录视图页面
     */
    public function showLogin(Request $request)
    {
     
        return view('admin.login');


    }

    public function login(Request $request){
        $cre = $request->only(['name','email','password']);
        //$err = 'fuck';
       if($this->guard()->attempt($cre)){
           echo 'ok';
       }else{
           echo 'nook';
           dd($this->guard());
           //dd($cre);
//           return view('admin.login');
       };

    }

    /**
     * 自定义认证驱动
     * @return mixed
     */
    protected function guard()
    {

        return auth()->guard('admin');
    }
}
