<?php

use App\models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertOrdersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $product_id = 1;
        $quantity = 2;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "27-11-2020 09:12:00"
        ]);
        $quantity = 3;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 2,
            "created_at" => "28-11-2020 09:12:00"
        ]);
        $quantity = 5;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 3,
            "created_at" => "2020-11-29 09:12:00"
        ]);
        $product_id = 2;
        $quantity = 4;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "2020-11-29 12:12:00"
        ]);
        $quantity = 6;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 2,
            "created_at" => "21-11-2020 09:12:00"
        ]);
        $quantity = 7;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 3,
            "created_at" => "23-11-2020 09:12:00"
        ]);
        $product_id = 3;
        $quantity = 2;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "25-11-2020 09:12:00"
        ]);
        $quantity = 4;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 2,
            "created_at" => "20-11-2020 09:12:00"
        ]);
        $quantity = 6;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 3,
            "created_at" => "18-11-2020 09:12:00"
        ]);
        $product_id = 4;
        $quantity = 2;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "2020-11-29 08:12:00"
        ]);
        $quantity = 4;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "28-11-2020 09:12:00"
        ]);
        $quantity = 6;
        DB::table("orders")->insert([
            "product_id" => $product_id,
            "quantity" => $quantity,
            "total" => $quantity*Product::find($product_id)->price,
            "created_by" => 1,
            "created_at" => "2020-11-29 04:12:00"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
