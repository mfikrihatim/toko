<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $user = Auth::user();
        $users = DB::table('users')->get();

        return view ('users.index',['users' => $users, 'user' => $user]);
    }

    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(){
        return view ('login.login');
    }

    public function create(){
        $user = Auth::user();
        if ($user->role_id == 2){
            return redirect()->route('user.index');
        }
        return view ('users.create');
    }

    public function simpan(Request $request){
       
        
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index');
    }
}
