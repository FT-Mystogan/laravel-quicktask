<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserStoreRequest;
use App\Models\Student;
use App\Models\Lop;

class UserController extends Controller
{
    public function login()
    {

        return view('admin.users.login');
    }

    public function store(UserStoreRequest $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            $email = $request->input('email');
            $password = $request->input('password');
            $request->session()->put('email', $email);
            return redirect()->route('home');
        }
        $data = "Sai thông tin đăng nhập";

        return view('admin.users.login', compact('data'));
    }

    public function changeLanguage(Request $request)
    {
        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'en') {
            $language = 'en';
        } else if ($lang == 'vi') {
            $language = 'vi';
        } else {
            $language = 'en';
        }
        $request->session()->put('language', $language);

        return redirect()->back();
    }

    public function home(Request $request)
    {
        return view('admin.users.home');
    }

    public function logout()
    {
        Auth::logout();

        return view('admin.users.login');
    }
}
