<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class AnnouncementModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


        public function __construct()
        { $this->middleware('auth');
            
        }


    public function index()
    {
        return view('announcement.announcement_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('announcement.announcement_form', compact('categories'));
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
        $announcement=AnnouncementModel::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id' => $request->category,
        ]);

        return redirect(route('announcement_index'))->with('status', 'Prodotto aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnouncementModel  $announcementModel
     * @return \Illuminate\Http\Response
     */
    public function show(AnnouncementModel $announcementModel)
    {
        //
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
