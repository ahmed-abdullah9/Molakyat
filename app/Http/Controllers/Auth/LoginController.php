<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('Logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['phone' => $request['mobile'], 'password' => $request['password']])) 
        {
            return redirect()->route('admin.index');
        }else {
            return redirect()->back();
        }
    }



    public function userLogin()
    {
        return view('auth/user/login');
    }

    public function postLogin(Request $request) {

        $phone = $request['mobile'];
        $password = $request['password'];
        $type = $request['type'];

        switch ($type) {
            case '0':
                if(Auth::guard('researchers')->attempt(['phone' => $phone, 'password' => $password])) 
                {
                    return redirect()->route('researcher.home');
                } else {
                    return redirect()->back();
                }
                break;

            case '1':
                if(Auth::attempt(['phone' => $phone, 'password' => $password])) 
                {
                   return redirect()->route('user.home');
                } else {
                    return redirect()->back();
                }
                break;
            default:
                return redirect()->back();
                break;
        }

    }

    public function Logout()
    {
        if (Auth::guard('researchers')->check()) {
            Auth::guard('researchers')->logout();
        } else {
            Auth::logout();
        }
        
        return redirect('login');
    }

}
