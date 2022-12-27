<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new Product;
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productImage', $imageName);

        $data->image = $imageName;
        $data->product_title = $request->productTitle;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('message', 'Product added Successfully');
    }
}
