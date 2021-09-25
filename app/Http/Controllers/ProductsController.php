<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        $products = auth()->user()->products();
        return view('dashboard', compact('products'));
    }
    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
        $product = new Product();
        $product->description = $request->description;
        $product->user_id = Auth::id();
        $product->save();
        return redirect('/dashboard');
    }

    public function edit(Product $product)
    {

        if (auth()->user()->id == $product->user_id) {
            return view('edit', compact('product'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function update(Request $request, Product $product)
    {
        if (isset($_POST['delete'])) {
            $product->delete();
            return redirect('/');
        } else {
            $this->validate($request, [
                'description' => 'required'
            ]);
            $product->description = $request->description;
            $product->save();
            return redirect('/');
        }
    }
}
