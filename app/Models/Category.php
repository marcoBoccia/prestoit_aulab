<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnnouncementModel;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nome',

    // ];

    public function announcements(){
        return $this->hasMany(AnnouncementModel::class);
    }

    
}
