<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class NewOrderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $users = DB::table('tbl_order_detail')
            ->join('tbl_order_header', 'tbl_order_detail.order_header_id', '=', 'tbl_order_header.id')
            // ->join('tbl_order_total', 'tbl_order_header.id', '=', 'tbl_order_total.order_header_id')
            ->join('tbl_product', 'tbl_order_detail.product_id', '=', 'tbl_product.id')
            ->select('tbl_order_detail.*', 'tbl_product.*')
            ->get();
            $NoOrder = "0001"; 
            $qwer = DB::table('tbl_order_header')
                ->select('id')
                 ->orderBy('id', 'DESC')
                 ->limit(1)
                 ->get();
          
            $OrderId = date('Ym') . $NoOrder;
            return view ('new_order.index',['new_order' => $users,'OrderId' => $OrderId,'qwer' => $qwer]);

    }

    public function simpan(Request $request){
        // $id = "2";

        $customer = 
        DB::table('tbl_customer')->insertGetId([
            'customer_name' => $request->customer_name,
            'status_id' => $request->status_id = 1,
        ]);

        DB::table('tbl_order_header')->insert([
            'id' => $request->id ,
            'order_date' => $request->order_date,
            'customer_id' => $customer,
            'status_id' => $request->status_id = 1,
        ]);

        return redirect()->route('new_order.index');
    }
   
    // public function create(){
    //     return view ('users.create');
    // }

}
