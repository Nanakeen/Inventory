<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function payments(){
        return $this->belongsTo(Payment::class,'invoice_id','id');
    }

     public function invoice_details(){
        return $this->hasMany(InvoiceDetails::class,'invoice_id','id');
    }
    
   
}
