<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
class CategoryController extends Controller
{
    public function View(){
      $categoris = Category::latest()->get();
      return view('Item_Category.index',compact('categoris'));
    }
    public function AddCate(){
        return view('Item_Category.create');
    }
    public function Store(Request $request){
      Category::insert([
        'name' => $request->name, 
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(), 

    ]);

     $notification = array(
        'message' => 'Category Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->route('viewindex')->with($notification);
    }
    public function Edit($id){

      $category = Category::findOrFail($id);
      return view('Item_Category.edit',compact('category'));
    }
    public function Update(Request $request){
      $category_id = $request->id;

      Category::findOrFail($category_id)->update([
          'name' => $request->name, 
          'updated_by' => Auth::user()->id,
          'updated_at' => Carbon::now(), 

      ]);

       $notification = array(
          'message' => 'Category Updated Successfully', 
          'alert-type' => 'success'
      );

      return redirect()->route('viewindex')->with($notification);
    }

public function Delete($id){
  Category::findOrFail($id)->delete();
      
  $notification = array(
       'message' => 'Category Deleted Successfully', 
       'alert-type' => 'success'
   );

   return redirect()->back()->with($notification);
}
}
