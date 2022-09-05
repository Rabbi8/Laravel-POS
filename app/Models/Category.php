<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title',];

    public static function arrayForSelect(){
        $categories = Category::all();
        $arr = [];
        foreach($categories as $Category){
            $arr[$Category->id] = $Category->title;
        }
        return $arr;
    }
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/M/Y h:i:s A');
    }
}
