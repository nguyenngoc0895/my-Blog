<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm(){
        return view('admin.layouts.login');
    }

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function guard(){
        return Auth::guard('admin');
    }

    protected function credentials(Request $request)
    {
        $admin = admin::where('email', $request->email)->first();
        if (count($admin)){
            if ($admin->status == 0){
                return [ 'email'=>'inactive', 'password'=>'Mày không được vào, muốn vào thì đưa tiền đây'];
            }else{
                return ['email'=>$request->email, 'password'=>$request->password, 'status'=>1];
            }
        }
        return $request->only($this->username(), 'password');
    }

}
