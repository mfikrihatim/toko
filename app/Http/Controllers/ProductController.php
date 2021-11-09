<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $user = Auth::user();
        $users = DB::table('tbl_product')->get();

        return view ('product.index',['product' => $users,  'user' => $user]);
    }

    public function create(){
        $user = Auth::user();
        if ($user->role_id == 2){
            return redirect()->route('product.index');
        }
        return view ('product.create');
    }

    public function simpan(Request $request){
        DB::table('tbl_product')->insert([
            'product_name' => $request->product_name,
            'unit_price' => $request->unit_price,
            'qty' => $request->qty,
            'status_id' => $request->status_id = 1,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id){
        $product = DB::table('tbl_product')->where('id',$id)->get();
        // passing data product yang didapat ke view edit.blade.php
        return view('product.edit',['product' => $product]);
    }
}
