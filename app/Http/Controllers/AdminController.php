<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product.create');
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

    public function showProduct()
    {
        $data = Product::all();
        return view('admin.product.show', compact('data'));
    }

    public function deleteProduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function updateProduct($id)
    {
        $data = Product::find($id);
        return view('admin.product.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $image = $request->file;

        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productImage', $imageName);
    
            $data->image = $imageName;  
        }
       
        $data->product_title = $request->productTitle;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('message', 'Product updated Successfully');
    }
}
