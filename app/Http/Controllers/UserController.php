<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $users = DB::table('users')->get();

        return view ('users.index',['users' => $users]);
    }

    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(){
        return view ('login.login');
    }

    public function create(){
        return view ('users.create');
    }
}
