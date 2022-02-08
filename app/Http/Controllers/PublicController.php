<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementModel;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){

        $announcements = AnnouncementModel::orderBy('created_at','desc')->take(5)->get();
        $categories = Category::all();
        return view("welcome", compact('announcements','categories'));

    }

    public function announcementsByCategory($name, $category_id){

        $category = Category::find($category_id);
        $announcements=$category->announcements()->paginate(5);

        return view('annoucements', compact('category', 'announcements'));


    }

}
