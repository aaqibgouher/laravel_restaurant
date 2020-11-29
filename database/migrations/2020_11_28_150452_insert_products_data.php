<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertProductsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table("products")->insert([
            "product_name" => "Tea",
            "price" => 10,
            "created_at" => now()
        ]);

        DB::table("products")->insert([
            "product_name" => "Coffee",
            "price" => 10,
            "created_at" => now()
        ]);

        DB::table("products")->insert([
            "product_name" => "Samosa",
            "price" => 15,
            "created_at" => now()
        ]);

        DB::table("products")->insert([
            "product_name" => "Cake",
            "price" => 15,
            "created_at" => now()
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
