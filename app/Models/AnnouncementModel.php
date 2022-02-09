<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class AnnouncementModel extends Model
{
    use HasFactory;



    protected $fillable =[
        'title', 'description',"category_id", "price","user_id",
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
}



