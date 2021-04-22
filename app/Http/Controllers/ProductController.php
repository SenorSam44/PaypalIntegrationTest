<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.add-product');
    }
    public function store(Request $request){
        error_log($request);
        $product = Product::create([
            'name' => $request->name,
            'amount' => $request->amount,
        ]);

        return redirect()->back()->with('success', "product uploaded");
    }

}
