<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class SyllabusController extends Controller
{
    public function syllabus(){

        $courses = Course::with('material','material.category','material.history')->get();
      
     
        return view('syllabus.syllabus',compact('courses'));
    }


}
