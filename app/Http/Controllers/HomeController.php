<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.home');
        }
        else
        {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }

    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }
       
    }

    public function search(Request $request)
    {
        $search = $request->search;

        if($search=='')
        {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }

        $data= Product::where('product_title', 'Like', '%'.$search.'%')->get();
        return view('user.home', compact('data'));

    }

    public function addCart()
    {
        
    }
}
