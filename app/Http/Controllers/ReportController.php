<?php

namespace App\Http\Controllers;

use App\models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;

class ReportController extends Controller
{
    public function report(){
        $data = [];
        $date_wise_sales = Order::select(DB::raw("date_format(created_at, '%Y-%m-%d') as created_at"), DB::raw("sum(total) as total_sales"))->groupBy(DB::raw("date_format(created_at, '%Y-%m-%d')"))->get()->toArray();
        $data["date_wise_sales"] = Charts::create('line', 'highcharts')
            ->title('Date wise sales')
            ->elementLabel('Total Sales')
            ->labels(array_column($date_wise_sales, "created_at"))
            ->values(array_column($date_wise_sales, "total_sales"))
            ->responsive(true);

        $product_by_quantity = Order::select("product_id", DB::raw("sum(quantity) as total_quantity"))->groupBy("product_id")->with('product')->get()->toArray();
        $data['product_by_quantity'] = Charts::create('pie', 'highcharts')
            ->title('Product By Quantity')
            ->elementLabel('Total Sales')
            ->labels(array_column(array_column($product_by_quantity, "product"), "product_name"))
            ->values(array_column($product_by_quantity, "total_quantity"))
            ->responsive(true);

        $product_wise_sale = Order::select("product_id", DB::raw("sum(total) as total_sales"))->groupBy("product_id")->with("product")->get()->toArray();
        $data['product_wise_sale'] = Charts::create('bar', 'highcharts')
            ->title('Product Wise Sale')
            ->elementLabel('Total Sales')
            ->labels(array_column(array_column($product_wise_sale, "product"),"product_name"))
            ->values(array_column($product_wise_sale, "total_sales"))
            ->responsive(true);

        
        return view("report", $data);
    }
}
