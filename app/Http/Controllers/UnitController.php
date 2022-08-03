<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;
class UnitController extends Controller
{
    public function View(){
        $units = Unit::latest()->get();
        return view('unit.index',compact('units'));
    }
    Public function Add(){
return view('unit.create');
    }
    Public function Store(Request $request){
        Unit::insert([
            'name' => $request->name, 
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

         $notification = array(
            'message' => 'Unit Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('viewunit')->with($notification);
            }
    Public function Edit($id){
        $unit = Unit::findOrFail($id);
        return view('unit.edit',compact('unit'));
    }
    Public function Update(Request $request){
        $unit_id = $request->id;

        Unit::findOrFail($unit_id)->update([
            'name' => $request->name, 
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Unit Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('viewunit')->with($notification);
    }
    Public function Delete($id){
        
        Unit::findOrFail($id)->delete();
      
        $notification = array(
             'message' => 'Unit Deleted Successfully', 
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
    }
}
