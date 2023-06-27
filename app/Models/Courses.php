<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\CoursesController;
use App\Http\Controller\LearnController;

class Courses extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $courses = "tb";
}
