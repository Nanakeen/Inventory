<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_issue extends Model
{
    use HasFactory;
    protected $guarded = [];
    
     public function invoice(){
        return $this->belongsTo(Invoice::class,'invoice_id','id');
    }
    public function customer(){
        return $this->belongsTo(Personnel::class,'personnel_id','id');
    } 
}
