<?php

namespace App\Http\Controllers;

use Exception;
use Validator;
use App\models\Order;
use App\models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function add(Request $request){
        $data = [];
        $data["error"] = "";
        $data["message"] = "";

        $data['products'] = Product::all();

        if($request->isMethod("post")){
            try{
                $validator = Validator::make($request->all(), [
                    "product_id" => "required|numeric",
                    "quantity" => "required|numeric|min:1|max:100"
                ]);

                if($validator->fails()){
                    throw new Exception($validator->errors()->first());
                }

                $product_id = $request->input('product_id');
                $quantity = $request->input('quantity');

                $product = Product::find($product_id);
                if(!$product) throw new Exception("Product does not exist.");

                $total = $quantity * $product->price;

                Order::insert([
                    "product_id" => $product_id,
                    "quantity" => $quantity,
                    "total" => $total,
                    "created_by" => Auth::id(),
                    "created_at" => now()
                ]);

                $data["message"] = "Ordered Successfully.";

            }catch(Exception $e){
                $data['error'] = $e->getMessage();
            }
        }

        return view('add_order', $data);
    }
}
