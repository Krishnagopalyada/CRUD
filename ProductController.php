<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');  
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',  
        'price' => 'required|decimal:2',  
        'description' => 'required|string',
    ]);

    $newProduct=Product::create($data);

    return redirect(route('product.index'));
}
}
