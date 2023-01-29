<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view("index",compact('products'));
    }

    
    public function addProduct(Request $request)
    {
        $request->validate(
            [
              'name'=>'required|unique:products',
              'price'=>'required',
            ],
            [
                'name.required'=>'Name is Required',
                'name.unique'=>'Name already exist',
                'price.required'=>'Price is required',
            ]
            );

            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->save(); 
            return response()->json([
                'status'=>'success',
            ]);
    }

    public function updateProduct(Request $request)
    {
        $request->validate(
            [
              'up_name'=>'required|unique:products,name,'.$request->up_id,
              'up_price'=>'required',
            ],
            [
                'up_name.required'=>'Name is Required',
                'up_name.unique'=>'Name already exist',
                'up_price.required'=>'Price is required',
            ]
            );

            Product::where('id',$request->up_id)->update([
                'name'=>$request->up_name,
                'price'=>$request->up_price,

            ]);
             
            return response()->json([
                'status'=>'success',
            ]);
    }


    public function deleteProduct(Request $request)
    {
     Product::find($request->product_id)->delete();
     return response()->json([
        'status'=>'success',
    ]);
    }

    

    
}
