<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use App\Models\product_issue;
use App\Models\product_issuedetails;
use App\Models\Personnel;
use App\Models\product_replenish;
use DB;
class InvoiceController extends Controller
{
    public function View(){
        $allData = product_issue::orderBy('date','desc')->orderBy('id','desc')->where('stat','0')->get();
        return view('Invoice.index',compact('allData'));
    }
    public function Add(){
        $category = Category::all();
        $costomer = Personnel::all();
        $invoice_data = product_issue::orderBy('id','desc')->first();
        if ($invoice_data == null) {
           $firstReg = '0';
           $invoice_no = $firstReg+1;
        }else{
            $invoice_data = product_issue::orderBy('id','desc')->first()->invoice_no;
            $invoice_no = $invoice_data+1;
        }
        $date= date('Y-m-d');
        $return_date  = date('Y-m-d');
        return view('Invoice.create',compact('invoice_no','category','date','return_date','costomer'));
    }
    public function Store(Request $request){
        if ($request->category_id == null) {
            $notification = array(
             'message' => 'Sorry You do not select any item', 
             'alert-type' => 'error'
         );
         return redirect()->back()->with($notification);
         } else{
             if ($request->paid_amount > $request->estimated_amount) {
     
                $notification = array( 
         );
         return redirect()->back()->with($notification);
             } else {
         $invoice = new product_issue();
         $invoice->invoice_no = $request->invoice_no;
         $invoice->personnel_id = $request->personnel_id;
         $invoice->date = $request->date("Y-m-d",strtotime($request->date));
         $invoice->return_date = $request->date("Y-m-d ",strtotime($request->return_date));;
         $invoice->remarks = $request->remarks;
         $invoice->stat = '0';
         $invoice->created_by = Auth::user()->id; 
         DB::transaction(function() use($request,$invoice){
             if ($invoice->save()) {
                $count_category = count($request->category_id);
                for ($i=0; $i < $count_category ; $i++) { 
                   $invoice_details = new product_issuedetails();
                   $invoice_details->date = date("Y-m-d ",strtotime($request->date));
                   $invoice_details->return_date =date("Y-m-d ",strtotime($request->return_date));
                   $invoice_details->invoice_id = $invoice->id;
                   $invoice_details->category_id = $request->category_id[$i];
                   $invoice_details->product_id = $request->product_id[$i];
                   $invoice_details->personnel_id = $request->personnel_id[$i];
                   $invoice_details->remarks = $request->remarks[$i];
                   $invoice_details->issuing_qty = $request->issuing_qty[$i];
                   $invoice_details->stat = '0'; 
                   $invoice_details->save(); 
                }

                 if ($request->personnel_id == '0') {
                     $customer = new Personnel();
                     $customer->name = $request->name;
                     $customer->mobile_no = $request->mobile_no;
                     $customer->email = $request->email;
                     $customer->save();
                     $personnel_id = $personnel->id;
                 } else{
                     $personnel_id = $request->personnel_id;
                 }    
             } 
                 }); 
     
             } // end else 
         }
          $notification = array(
             'message' => 'Item Data Inserted Successfully', 
             'alert-type' => 'success'
         );
         return redirect()->route('invoview')->with($notification); 
    }
    public function Pending(){
        $allData = Invoice::orderBy('date','desc')->orderBy('id','desc')->where('stat','0')->get();
            return view('Invoice.pending',compact('allData'));
    } // End Method
    public function Delete($id){
    $invoice = product_issue::findOrFail($id);
    $invoice->delete();
    product_issuedetails::where('invoice_id',$invoice->id)->delete();  
     $notification = array(
    'message' => 'Item Deleted Successfully', 
    'alert-type' => 'success'
);
return redirect()->back()->with($notification); 
}
public function Approve($id){
    $invoice = Invoice::with('invoice_details')->findOrFail($id);
    return view('Invoice.approve',compact('invoice'));
}
public function ApproveStore(Request $request,$id){
    foreach($request->selling_qty as $key => $val){
        $invoice_details = InvoiceDetails::where('id',$key)->first();
        $product = Product::where('id',$invoice_details->product_id)->first();
        if($product->quantity < $request->selling_qty[$key]){

    $notification = array(
    'message' => 'Sorry you approve Maximum Value', 
    'alert-type' => 'error'
);
return redirect()->back()->with($notification); 
        }
    } // End foreach 
    $invoice = Invoice::findOrFail($id);
    $invoice->updated_by = Auth::user()->id;
    $invoice->status = '1';
    DB::transaction(function() use($request,$invoice,$id){
        foreach($request->selling_qty as $key => $val){
         $invoice_details = InvoiceDetails::where('id',$key)->first();
         $invoice_details->status = '1';
         $invoice_details->save();
         $product = Product::where('id',$invoice_details->product_id)->first();
         $product->quantity = ((float)$product->quantity) -((float)$request->selling_qty[$key]);
         $product->save();
        } // end foreach
        $invoice->save();
    });
$notification = array(
    'message' => 'Item Approve Successfully', 
    'alert-type' => 'success'
);
return redirect()->route('appending')->with($notification);  
}
public function PrintList(){
    $allData = Invoice::orderBy('date','desc')->orderBy('id','desc')->where('status','1')->get();
    return view('Invoice.Invoice_print_list',compact('allData'));
}
public function Print($id){
    $invoice = Invoice::with('invoice_details')->findOrFail($id);
    return view('pdf.print_invoice',compact('invoice'));

}
public function DailyReport(){
  return view('Invoice.dialy_invoice_report');  
}


public function DailyInvoicePdf(Request $request){

    $sdate = date('Y-m-d',strtotime($request->start_date));
    $edate = date('Y-m-d',strtotime($request->end_date));
    $allData = Invoice::whereBetween('date',[$sdate,$edate])->where('status','1')->get();
    $start_date = date('Y-m-d',strtotime($request->start_date));
    $end_date = date('Y-m-d',strtotime($request->end_date));
    return view('pdf.daily_invoice_report_pdf',compact('allData','start_date','end_date'));
} // End Method
public function report(){
    return view('report.report');
}
public function replenishview(){
    $allreplen = product_replenish::orderBy('replenish_date','desc')->orderBy('id','desc')->where('stat','0')->get();
    return view('replenish.index',compact('allreplen'));
}
public function replenisnadd(){
    $category = Category::all();
    $invoice_replen = product_replenish::orderBy('id','desc')->first();
    $replenish_date= date('Y-m-d');
    return view('replenish.create',compact('category','replenish_date','invoice_replen'));
}
public function replenishstore(Request $request){
    
             $purchase = new product_replenish();
             $purchase->product_id = $request->product_id;
             $purchase->replenish_date =$request->replenish_date;
             $purchase->quantity = $request->quantity;
             $purchase->remarks = $request->remarks;
             $purchase->created_by = Auth::user()->id;
             $purchase->stat = '0';
             $purchase->save();
          
    
     $notification = array(
         'message' => 'Data Save Successfully', 
         'alert-type' => 'success'
     );
     return redirect()->route('replenish.view')->with($notification); 
    
}
}
