<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request){
        $dataTervalidasi = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $dataTervalidasi['password'] = bcrypt($dataTervalidasi['password']);
        $dataTervalidasi['password'] = Hash::make($dataTervalidasi['password']);

        User::create($dataTervalidasi);

        // $request->session()->flash('success', 'Registrasion Successfull, Please Login');

        return redirect('/login')->with('success', 'Registrasion Successfull, Please Login');
    }
}
