<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Register;
use App\HasilUjian;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $user = Auth::user();
        $users = User::count();
        $register = Register::count();
        $hasilujian = HasilUjian::count();
        $admin = Admin::count();
        
        return view('admin.home', compact('user','users','register','hasilujian', 'admin'));
    }
}
