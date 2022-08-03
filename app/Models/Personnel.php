<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getFullNameAttribute()
    {
        return "{$this->surname} {$this->othernames}";
    }
    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id','id');
    }
    public function rank(){
        return $this->belongsTo(rank::class,'rank_id','id');
    }
    public function invoice(){
        return $this->belongsTo(product_issuedetails::class,'invoice_id','id');
    }
    public function product_issue(){
        return $this->belongsTo(product_issue::class,'invoice_id','id');
    }
}
