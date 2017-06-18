<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'required' => ':attribute harus diisi',
            'email' => ':attribute harus berupa email valid',
        ], [
            'email' => 'Email',
            'password' => 'Password',
        ]);

        try {
            $auth = auth()->guard('admin');
            $email = $request->input('email');
            $password = $request->input('password');
            $status_attempt = $auth->attempt([
                'email' => $email,
                'password' => $password,
            ]);
            if (!$status_attempt) {
                throw new Exception("Gagal Login, Email & Password Tidak Valid", 1);
            }
            Session::put('level', 'admin');
            return redirect(route('admin.dashboard'));
        } catch (Exception $e) {
            return redirect(route('admin.login'))
                ->withErrors([$e->getMessage()])
                ->withInput();
        }
    }

    public function logout(Request $request)
    {
        Session::forget('level');
        Auth::logout();
        return Redirect::route('admin.login')->withErrors(['Berhasil Logout. Silahkan Masuk Email & Password untuk masuk kembali']);
    }

    public function dashboard(Request $request)
    {
        return view('admin.dashboard', [
            'admin' => auth('admin')->user(),
        ]);
    }
}
