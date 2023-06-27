<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Video;
use App\Models\User;
class LearnController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // truy van
    public function learn( $sluq){
        $getnot = courses::where('name_courses','<>',$sluq)->where('id','<','10')->inRandomOrder()->limit(3)->get();
        $video = video::where('name_courses','CSS')->get();
        $getname = courses::where('name_courses', $sluq)->first();
        $getcourses = video::where('name_courses', $sluq)->get();
        $count = video::where('name_courses',$sluq)->where('id','>','0')->count();
        
       
        
        $tb = courses::all()->first();
        return view('learn.learn',compact('tb','getname','getcourses','getnot','count'));
        
    }
   
    
   
}
