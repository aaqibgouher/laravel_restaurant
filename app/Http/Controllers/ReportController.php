<?php

namespace App\Http\Controllers;

use App\models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report(){
        $data = [];
        $data['date_wise_sales'] = "";
        $data['product_by_quantity'] = Order::select("product_id", DB::raw("sum(quantity) as total_quantity"))->groupBy("product_id")->get();
        $data['product_wise_sale'] = Order::select("product_id", DB::raw("sum(total) as total_sales"))->groupBy("product_id")->get();

        
        echo json_encode($data);die;
    }
}
