<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ORM - Object Relational Mapper
        // SELECT * FROM dbz_db2.products; from MySQL db
        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // INSERT INTO products (name, description, quantity, price, category, image)

        $request->validate([
            "name" => "required",
            "desc" => "required",
            "quantity" => "required",
            "price" => "required",
            "category" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg ",


        ]);

        $path = $request->file("image")->store("images", "public");


        Product::create([
            "name" => $request->name,
            "description" => $request->desc,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "category" => $request->category,
            "images"  => $path,
            'users' => Auth::id()

        ]);

        return back()->with('success', 'Inventory updated.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // SELECT * FROM dbz_db2.products WHERE id = ();
        $product = Product::find($id);

        return view('products.show' , ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        request()->validate([
            "name" => "required",
            "desc" => "required",
            "quantity" => "required",
            "price" => "required",
            "category" => "required",
        ]);

        $product = Product::find($id);

        $product->name = request()->name;
        $product->description = request()->desc;
        $product->quantity = request()->quantity;
        $product->price = request()->price;
        $product->category = request()->category;

        $product->save();

        return redirect(url()->current())->with('success', 'Product Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Product::destroy($id);

       return redirect('/products')->with('success', 'Product Deleted.');
    }
}
