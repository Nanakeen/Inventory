<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\rank;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;
class rankcontroller extends Controller
{
    public function View(){
        $data = rank::latest()->get();
        return view('rank.index',compact('data'));
      }
      
      public function RankAdd(){
        $supplier = Supplier::all();
          return view('rank.create',compact('supplier'));
      }

      public function Store(Request $request){
        rank::insert([
          'supplier_id' => $request->supplier_id, 
          'name' => $request->name, 
          'created_by' => Auth::user()->id,
          'created_at' => Carbon::now(),
      ]);
       $notification = array(
          'message' => 'Rank Inserted Successfully', 
          'alert-type' => 'success'
      );
      return redirect()->route('viewrank')->with($notification);
      }

      public function Edit($id){
        $ran = rank::findOrFail($id);
        $supplier = Supplier::all();
        return view('rank.edit',compact('ran','supplier'));
      }

      public function Update(Request $request){
        $rank_id=$request->id;
        $supplier_id=$request->id;
        rank::findOrFail($rank_id)->update([
          'supplier_id' => $request->supplier_id,
            'name' => $request->name, 
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 
  
        ]);
         $notification = array(
            'message' => 'Rank Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('viewrank')->with($notification);
      }
  
  public function Delete($id){
    rank::findOrFail($id)->delete();
        
    $notification = array(
         'message' => 'Rank Deleted Successfully', 
         'alert-type' => 'success'
     );
  
     return redirect()->back()->with($notification);
  }
}
