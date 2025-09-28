<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

       $products = Product::all();

       

       return view('product/index' , [
          'products' => $products
       ]);
    }


    public function create(){

      return view('product/create');
   }


   public function store(Request $request){

      // Form validation
      $request-> validate ([
         'name' => 'required|max:100',
         'description' => 'nullable|min:3',
         'size' => 'required|decimal:0,2|max:100'
     ]);

     // take the input and store it to dtabqase databse ORM
      Product::create($request -> input()); 

      // products.index is the route name in web.php . redirect the route using name.
      return redirect() -> route('products.index')->with('success', 'Product added successfully');
   }


   public function show(string $id){

      // find is a in build method that call the individual ids . it will limit 1
      // The executed query with this line is select * from `product` where `product`.`id` = '$id' limit 1
      $products = Product::find($id); // we can use findOrFail method to avoid if condition bellow

      if($products === null){
        abort(404); //abort is a helper function . It shows the 404 error page
      }

      return view('product/show', [
         'products' => $products // we can use campact function here . you will see the documentation of that func and update this line
      ]);
   }


   public function edit(string $id){

      // Fetch the product by id
      $products = Product::find($id);

     if ($products === null) {
         abort(404);
     }

      return view('product/edit', [
         'products' => $products // we can use campact function here . you will see the documentation of that func and update this line
      ]);
   }


   public function update(Request $request, Product $product)
    {
        // Form validation
      $request-> validate ([
         'name' => 'required|max:100',
         'description' => 'nullable|min:3',
         'size' => 'required|decimal:0,2|max:100'
     ]);

        

      // Update the product in the database
    $product->update($request->all());

    // Redirect back to the product page with a success message
    return redirect()->route('products.show', $product)->with('status', 'Product updated');
    }
    


}
