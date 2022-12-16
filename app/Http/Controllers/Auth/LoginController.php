<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $req)
    {
        if (Auth::guard('admin')->attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])) {
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->intended(route('admin.login'));
    }

    public function logout(Request $req)
    {
        if ($req->guard == 'admin') {
            Auth::guard('admin')->logout();
            return redirect(route('admin.login'));
        } else {
            Auth::guard()->logout();
            return redirect(route('login'));
        }
    }
}