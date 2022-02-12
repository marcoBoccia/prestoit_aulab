<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\AnnouncementModel;
use Illuminate\Support\Facades\Auth;

class AnnouncementModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


        public function __construct()
        { 
            $this->middleware('auth');
        }


    public function index()
    {   
            // $announcements = AnnouncementModel::all();
        $announcements = AnnouncementModel::where('is_accepted',true)->orderBy('created_at','desc')->take(5)->get();

        return view('announcement.announcement_index', compact('announcements'));
    }


    // public function newAnnouncement(){
       
    //     return view('', compact('uniqueSecret'));
    // }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
         $uniqueSecret = base_convert(sha1(uniqid(mt_rand())), 16 , 36);

        return view('announcement.announcement_form', compact('categories', 'uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $announcement=AnnouncementModel::create([
        //     "user_id"
        //     'title'=>$request->title,
        //     'description'=>$request->description,
        //     'category_id' => $request->category,
        //     'price'=>$request->price,    
        // ]);
 
        $user=Auth::user();
        $user->announcements()->create([
            
                'description'=>$request->description,
                'title'=>$request->title,   
                'price'=>$request->price,   
                'category_id'=>$request->category, 

                'uniqueSecret'=>$request->uniqueSecret,
              
           
        ]);
            //  dd($request->uniqueSecret);
        return redirect(route('announcement_index'))->with('status', 'Prodotto aggiunto correttamente');
    }

    public function uploadImage(Request $request){
        
        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        session()->push("images.{$uniqueSecret}" , $fileName);

        return response()->json(session()->get("images.{$uniqueSecret}"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnouncementModel  $announcementModel
     * @return \Illuminate\Http\Response
     */
    public function show(AnnouncementModel $a)
    {
        //dd($a);
        return view("announcement.announcement_detail", compact("a"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnouncementModel  $announcementModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnouncementModel $announcementModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnouncementModel  $announcementModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnouncementModel $announcementModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnouncementModel  $announcementModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnouncementModel $announcementModel)
    {
        //
    }
}
