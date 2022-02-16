<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Jobs\ResizeImage;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use App\Models\AnnouncementModel;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Http\Requests\AnnouncementRequest;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Container\RewindableGenerator;


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
    public function create(Request $request)
    {
        //dd($request->all());
        $categories = Category::all();
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16 , 36)
        );

        return view('announcement.announcement_form', compact('categories', 'uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        
        // dd($request->all());
        // $announcement=AnnouncementModel::create([
        //     "user_id"
        //     'title'=>$request->title,
        //     'description'=>$request->description,
        //     'category_id' => $request->category,
        //     'price'=>$request->price,    
        // ]);
        
        
        //dd($images);
        
        
        $announcement = Auth::user()->announcements()->create([
            
            'description'=>$request->description,
            'title'=>$request->title,   
            'price'=>$request->price,   
            'category_id'=>$request->category, 
            
        ]);
        $uniqueSecret=$request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}", []);
        // dd($images);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);
        $images = array_diff($images, $removedImages);
        // dd($images);
                foreach ($images as $image) {
                $i = new AnnouncementImage();

                $fileName = basename($image);
                //$file = Storage::move($image, "public/announcements/{$announcement->id}/{$fileName}");
                $newFileName = "public/announcements/{$announcement->id}/{$fileName}";
                // dd($fileName);

                Storage::move($image, $newFileName);

                    
                    // dispatch(new ResizeImage($newFileName,400,300));

                $i->file = $newFileName;
                $i->announcement_model_id = $announcement->id;

                $i->save();
        
                GoogleVisionSafeSearchImage::withChain([
                    new GoogleVisionLabelImage($i->id),
                    new GoogleVisionRemoveFaces($i->id),
                    new ResizeImage($i->file,300,150),
                ])->dispatch($i->id);
            }

        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
            
        return redirect(route('announcement_form'))->with('status', 'Prodotto aggiunto correttamente');
    }

    public function uploadImage(Request $request){
        
        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        dispatch(new ResizeImage($fileName,120,120));

        session()->push("images.{$uniqueSecret}" , $fileName);

        return response()->json([
            'id'=>$fileName,
        ]);

    }

    public function removeImage(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->input('id');

        session()->push("removedImages.{$uniqueSecret}" , $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }

    public function getImages(Request $request){

        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}" , []);
        // dd($images);
        $removedImages = session()->get("removedImages.{$uniqueSecret}" , []);

        $images = array_diff($images , $removedImages);


        $data = [];

        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByFilePath($image,120,120)
            ];
        }

        return response()->json($data);
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
