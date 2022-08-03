<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;
class SupplierController extends Controller
{
    public function Index(){
        // $suppliers = Supplier::all();
        $suppliers = Supplier::latest()->get();
        return view('supplier.index',compact('suppliers'));
    }
    public function create(){
        // $suppliers = Supplier::all();
        return view('supplier.create');
    }
    public function store(Request $request){
        Supplier::insert([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Supplier Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('viewsupp')->with($notification);
    }
    public function Edit($id){
        $supplier = Supplier::findOrFail($id);
        return view('supplier.Edit',compact('supplier'));

    }
    public function update(Request $request){
        $supllier_id = $request->id;
        Supplier::findOrFail($sullier_id)->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Supplier Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('viewsupp')->with($notification);
    }
    public function delete($id){
        Supplier::findOrFail($id)->delete();
      
        $notification = array(
             'message' => 'Supplier Deleted Successfully', 
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     } // End Method 
}
