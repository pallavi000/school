<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required'
        ]);

      

        $course = Course::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'title'=>$request->title,
        ]);
        return redirect()->back()->with(['success' => 'Course created successfully!!']);
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required'
        ]);
       
           $course->name=$request->name;
            $course->slug=Str::slug($request->name,'-');
            $course->title = $request->title;
            $course->save();
            return redirect()->back()->with(['success' => 'Course updated successfully!!']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course){
            $course->delete();
             return redirect()->back()->with(['success' => 'Course deleted successfully!!']);
        }
    }
}
