<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementModel;
use App\Models\Category;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function welcome(){

        $announcements = AnnouncementModel::where('is_accepted',true)->orderBy('created_at','desc')->take(4)->get();
        $categories = Category::all();
        return view("welcome", compact('announcements'));

    }

    // public function announcementsByCategory($name, $category_id){

    //     $category = Category::find($category_id);
    //     $announcements=$category->announcements()->orderBy('created_at','desc')->paginate(5);
    //     dd('ciaooooooo');

    //     return view('annoucements', compact('category', 'announcements'));
    // }



    public function search(Request $req){
        $q = $req->input('q');
        //Per usare il paginate al posto di get
        $announcements = AnnouncementModel::search($q)->where('is_accepted', true)->get(); 


    return view('search_results', compact('announcements','q'));
    }

    public function locale($locale)
    {
        session()->put('locale',$locale);
        return redirect()->back();
    }



}
