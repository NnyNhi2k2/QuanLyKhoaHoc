<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class IndexController extends Controller
{
    // truy van
    public function index(){
        $tb = courses::where('id','<','4')->get(); 
        $tbh = courses::where('name_courses','HTML')->get();
        $tbc = courses::where('name_courses','CSS')->get();
        $tbj = courses::where('name_courses','Javascript')->get();
        return view('index',compact('tb','tbc','tbh','tbj'));
    }
    
}
