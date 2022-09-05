<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $this->data['products']         = Product::all();
        return view('products.products', $this->data );
    }


    public function create()
    {
        $this->data['mode']                   = 'Create product';
        $this->data['products_category']      = Category::arrayForSelect();
       return view('products.create_edit', $this->data);
    }

    public function store(StoreProductRequest $request)
    {
        $data= $request->all();
        Product::create($data);
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        $this->data['product'] = Product::find($product->id);
        $this->data['mode']    = 'Information';
        return view('products.show', $this->data);
    }

    public function edit(Product $product)
    {
        $this->data['product']               = Product::find($product->id);
        $this->data['mode']                  = 'Edit product';
        $this->data['products_category']     = Category::arrayForSelect();
        return view('products.create_edit', $this->data );
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product                    = Product::find($product->id);
        $product->title             = $request->title;
        $product->description       = $request->description;
        $product->cost_price        = $request->cost_price;
        $product->price             = $request->price;
        $product->unit              = $request->unit;
        $product->category_id       = $request->category_id;
        $product->save();

        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('products.index');
    }
}
