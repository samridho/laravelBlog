<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    public function catagory(){
        return $this->belongsTo(Category::class,'catagory_id','id');
    }
}

