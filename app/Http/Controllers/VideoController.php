<?php

namespace App\Http\Controllers;
use App\Models\Video;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $getinfo = video::all();
        return view('admin.courses.formvideo',compact('getinfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //tao video
    public function store(Request $request)
    {
        try{
            $data = $request->all();
           
            $video = new Video();
            
            $video->video = $data['video'];
            $video->name_courses = $data['name_courses'];
            $video->link = $data['link'];
            $video->exercise = $data['exercise'];
            $sql = video::where('link',$data['link'])->count();
            $sql1 = video::where('video',$data['video'])->count();
            if($sql == 1 && $sql1 == 1){
                return redirect()->back()->with('error','Video name and Link has exist'); 
            }elseif($sql1==1){
                return redirect()->back()->with('error','Video name has exist!'); 
            }
            elseif($sql==1){
                return redirect()->back()->with('error','Link has exist!'); 
            }
            else{
                $video->save();
                return redirect()->back()->with('insert','Data has been insert successfully!'); 
            }
           

        }catch(\exception $e){
            return redirect()->back()->with('error','Data has been insert false!'); 
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // sua lai video
    public function edit($id)
    {
        $find = video::find($id);
        $getinfo = video::all();
        return view('admin.courses.formvideo',compact('getinfo','find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /// chinh sua video 
    public function update(Request $request, $id)
    {
        try{
            $data = $request->all();
            /*$request->validate([
                'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm,MP4'
            ]);
            $file=$request->file('video');
            $file->move('upload',$file->getClientOriginalName());
            $file_name=$file->getClientOriganalName();
            $insert = new video();
            $insert->video = $file_name;
            
            $insert->save();*/
            $video =  Video::find($id);
            
            $video->video = $data['video'];
            $video->name_courses = $data['name_courses'];
            $video->link = $data['link'];
            $video->exercise = $data['exercise'];
           
            $video->save();
            return redirect()->route('video.create')->with('insert','Data has been insert successfully!'); 
        }catch(\exception $e){
            return redirect()->back()->with('error','Data has been insert false!'); 
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    //xoa video theo id
    public function destroy($id)
    {
        video::find($id)->delete();
        
        return redirect()->back()->with('successfully','Deleted');
    }
    
    public function video(){
         
     
      
       return view('learn.learn');

   }
   //tim kiem khoa hoc theo ten (chua lam duoc)
   public function search(Request $request){
       if($request->isMethod('post')){
           $name = $request->get('name');
           $data = video::where('name_courses','like','%'.$name.'%')->paginate(5);
       }
       return view('admin.courses.formvideo',compact('data'));
      
    }
   
}
