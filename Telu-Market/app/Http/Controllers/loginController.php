<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{

    public function __construct()
    {
        $this->middleware('web');
    }

    //menampilkan view page login
    public function login()
    {
        return view("Login");
    }

    //menampilkan view page registrasi
    public function regist()
    {
        return view("Registration");
    }

    //validasi untuk post data kedalam database untuk registrasi
    public function RegisterUser(Request $request)
    {
        //validasi data
        $request->validate([
            'Username' => 'required',
            'Email' => 'required|email|unique:data',
            'Password' => 'required|min:5|max:15'
        ]);

        //post data kedalam database melalui inputan
        $user = new User();
        $user->Username = $request->Username;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);
        $res = $user->save();

        //check data apakah sudah sesuai format atau tidak
        if ($res) {
            return back()->with('success', 'Registrasi Berhasil');
        } else {
            return back()->with('fail', 'Sesuatu salah');
        }
    }

    //validasi untuk get data pada database untuk login
    public function LoginUser(Request $request)
    {
        //validasi data
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required|min:5|max:15'
        ]);

        //cek apakah email ada
        $user = User::where('Email', '=', $request->Email)->first();

        //pengkondisian dimana jika user ditemukan maka akan melanjutkan validasi
        if ($user) {
            if (Hash::check($request->Password, $user->Password)) {
                session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'password salah');
            }
        } else {
            return back()->with('fail', 'akun tidak ditemukan');
        }
    }

    //menampilkan dashboard jika berhasil login
    public function dashboard()
    {
        return view("Catagory");
    }
}
