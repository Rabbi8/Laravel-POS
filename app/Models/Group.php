<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function users(){
        return $this->hasOne(User::class, 'group_id', 'id');
    }
}
