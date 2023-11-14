<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
        $products = Product::paginate(8);

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
            "users" => Auth::id()
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

        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Product::where('id', $id)
        ->update([
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        return back()->with('success', 'Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return redirect('/products')->with('success', 'Successfully Deleted.');
    }
}
