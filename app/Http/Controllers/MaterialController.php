<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use File;


class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $materials = Material::with('category','course')->get();
        return view('admin.material.index',compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('admin.material.create',compact('courses','categories'));
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
            'title'=>'required',
            'course_id'=>'required',
          
            'file'=>'required'
        ]);

        if($request->hasFile('file')){
                    $file= $request->file('file');
                    $path= time().'-'. Str::random(6).'.'.$file->extension();
                    $request->file('file')->move(public_path('file'),$path);
                    $pictureUrl= '/file/'.$path;
                    
        }

        $material = Material::create([
            'title'=>$request->title,
            'course_id'=>$request->course_id,
            'file'=>$pictureUrl,
            'category_id'=>$request->category_id
        ]);
        
        return redirect()->back()->with(['success' => 'Material Added successfully!!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('admin.material.edit',compact('courses','material','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {

        $this->validate($request,[
            'title'=>'required',
            'course_id'=>'required',
          
           
        ]);
        

        if($request->hasFile('file')){
            $file= $request->file('file');
            $path= time().'-'. Str::random(6).'.'.$file->extension();
            $request->file('file')->move(public_path('file'),$path);
            $pictureUrl= '/file/'.$path;
            $material->file= $pictureUrl;
        }
     


        $material->title= $request->title;
        $material->detail=$request->detail;
        $material->course_id= $request->course_id;
        $material->category_id = $request->category_id;
        $material->save();

        return redirect()->back()->with(['success' => 'Material updated successfully!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        if($material){
            $material->delete();
            return redirect()->back()->with(['success' => 'Material deleted successfully!!']);
        }
    }
}
