<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Carbon;



class SaleInvoice extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d/M/Y h:i:s A');
    }
}
