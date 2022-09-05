<?php

namespace App\Models;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable= [
        'category_id','title', 'cost_price', 'price', 'unit', 'description', 
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('D-M-Y h:i:s A');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('D-M-Y h:i:s A');
    }
}
