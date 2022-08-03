<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\rank;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;
use Image; 
use App\Models\Payment;
use App\Models\PaymentDetail;

class personnelcontroller extends Controller
{
    public function index(){
        $pers = Personnel::latest()->get();
        return view('records.index',compact('pers'));
    }
    public function create(){
        $unit=Unit::all();
        $ranks=rank::all();
        return view('records.create',compact('unit','ranks'));
    }
    public function store(Request $request){
        $image = $request->file('personnel_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/personnel/'.$name_gen);
        $save_url = 'upload/personnel/'.$name_gen;

        Personnel::insert([
            'unit_id' => $request->unit_id,
            'rank_id' => $request->rank_id,
            'svcnumber' => $request->svcnumber,
            'surname' => $request->surname,
            'othernames' => $request->othernames,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'gender' => $request->gender,
            'arm' => $request->arm,
            'personnel_image' => $save_url ,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Customer Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('perview')->with($notification);
    }
    public function edit($id){
        
        $personel = Personnel::findOrFail($id);
        $unit=Unit::all();
        $ranks=rank::all();
        return view('records.edit',compact('personel','unit','ranks'));
    }
    public function update(Request $request){
        $personnel_id = $request->id;
        if ($request->file('personnel_image')) {
        $image = $request->file('personnel_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/personnel/'.$name_gen);
        $save_url = 'upload/personnel/'.$name_gen;
        Personnel::findOrFail($personnel_id)->update([
            'unit_id' => $request->unit_id,
            'rank_id' => $request->rank_id,
            'svcnumber' => $request->svcnumber,
            'surname' => $request->surname,
            'othernames' => $request->othernames,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'gender' => $request->gender,
            'arm' => $request->arm,
            'personnel_image' => $save_url ,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Customer Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('perview')->with($notification);
             
        } else{

          Personnel::findOrFail($personnel_id)->update([
            'unit_id' => $request->unit_id,
            'rank_id' => $request->rank_id,
            'svcnumber' => $request->svcnumber,
            'surname' => $request->surname,
            'othernames' => $request->othernames,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'gender' => $request->gender,
            'arm' => $request->arm,
            'personnel_image' => $save_url ,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
         $notification = array(
            'message' => 'Customer Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('perview')->with($notification);

        } // end else 

    } // End Method

public function delete($id){
        $personel = Personnel::findOrFail($id);
        
        $img = $personel->personnel_image;
        unlink($img);
        Personnel::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Customer Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    } // End Method

    public function CreditCustomer(){

        $allData = Payment::whereIn('paid_status',['full_due','partial_paid'])->get();
        return view('backend.customer.customer_credit',compact('allData'));

    } // 
}
