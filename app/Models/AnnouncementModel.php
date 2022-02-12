<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Laravel\Scout\Searchable;

class AnnouncementModel extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable =[
        'title', 'description',"category_id", "price","user_id",
        
    ];

    public function toSearchableArray()
    {
        $category=$this->category;
        $array =[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'altro'=>'annunci',
            'category'=>$category,  
        ];

        return $array;
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }

    public function image(){
        return $this->hasMany(AnnouncementImage::class);
    }

    static public function ToBeRevisionedCount(){
        return AnnouncementModel::where("is_accepted", null)->count();
    }
}



