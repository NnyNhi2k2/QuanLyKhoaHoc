<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
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
        $getcourses = courses::all();
        
        return view('admin.courses.form',compact('getcourses'));
    }
    public function updateVideo(){
        
        return view('admin.courses.formvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // tao khoa hoc
    public function store(Request $request)
    {

            try{
                $data = $request->all();
                    
                $courses = new Courses();
                $courses->name_courses = $data['name_courses'];
                $courses->info_courses = $data['info_courses'];
                $sql = courses::where('name_courses', $data['name_courses'])->count();
                if($sql==1){
                    return redirect()->back()->with('error','Name courses has exist!'); 

                }else{

                   
                    $courses->save();
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
    //tim khoa hoc(chua lam duoc)
    public function edit($id)
    {
        $find = courses::find($id);
        $getcourses = courses::all();
        return view('admin.courses.form',compact('getcourses','find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // chinh sua khoa hoc
    public function update(Request $request, $id)
    {
        try{
            $data = $request->all();
            $courses =  Courses::find($id);
            
            $courses->name_courses = $data['name_courses'];
            $courses->info_courses = $data['info_courses'];
           
            $courses->save();
            return redirect()->route('courses.create')->with('insert','Data has been insert successfully!'); 
        }catch(\exception $e){
            return redirect()->back()->with('error','Data has been insert false!'); 
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //xoa khoa hoc theo id
    public function destroy($id)
    {
         courses::find($id)->delete();
         return redirect()->back()->with('successfully','Deleted');
    }
    public function courses(){
        $tbb= courses::all();
        
         
        return view('learn.minicourses', compact('tbb'));

    }
    
    
}
