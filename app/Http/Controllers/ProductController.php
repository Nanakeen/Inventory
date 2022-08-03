<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use Auth;
use Illuminate\Support\Carbon;
class ProductController extends Controller
{
    public function View(){
        $product = Product::latest()->get();
        return view('Products.index',compact('product'));
    }
    public function Add(){
        $supplier = Supplier::all();
        $category = Category::all();
        return view('Products.create',compact('supplier','category'));
    }
    public function Store(Request $request){
        Product::insert([
            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'return_or_non' => $request->return_or_non,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('viewpro')->with($notification); 
    }
    public function Edit($id){
        $supplier = Supplier::all();
        $category = Category::all();
        $product = Product::findOrFail($id);
        return view('Products.edit',compact('product','supplier','category'));
    }
    public function Update(Request $request){
        $product_id = $request->id;
        Product::findOrFail($product_id)->update([
           'name' => $request->name,
           'supplier_id' => $request->supplier_id,
           'category_id' => $request->category_id, 
           'return_or_non' => $request->return_or_non,
           'quantity'=>$request->quantity,
           'updated_by' => Auth::user()->id,
           'updated_at' => Carbon::now(), 
       ]);
       $notification = array(
           'message' => 'Product Updated Successfully', 
           'alert-type' => 'success'
       );
       return redirect()->route('viewpro')->with($notification);  
    }
    public function Delete($id){
        Product::findOrFail($id)->delete();
        $notification = array(
        'message' => 'Product Deleted Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification); 
    }
}

