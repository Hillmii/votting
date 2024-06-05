<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistrasiRequest;

class LoginController extends Controller
{
    public function index(Request $request){

        return view('layout.login');
    }

    public function store(LoginRequest $request){
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('poll');
        }
        
        return back();
    }

    public function registrasi(Request $request){
        return view('layout.registrasi');
    }

    public function regiStore(RegistrasiRequest $request){
        $validatedData = $request->validated();

        User::create($validatedData);
    
        return redirect('login');
    }
}
