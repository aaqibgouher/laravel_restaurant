<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table("users")->insert([
            "name" => "Ram",
            "email" => "ram@gmail.com",
            "password" => bcrypt("123456"),
            "created_at" => now()
        ]);
        DB::table("users")->insert([
            "name" => "Shyam",
            "email" => "shyam@gmail.com",
            "password" => bcrypt("123456"),
            "created_at" => now()
        ]);
        DB::table("users")->insert([
            "name" => "Ghanshyam",
            "email" => "ghanshyam@gmail.com",
            "password" => bcrypt("123456"),
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
        DB::table("users")->where("id", ">", 0)->delete();
    }
}
