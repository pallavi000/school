<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function page(){
        return view('page');
    }


    public function getDownload($id){
        //PDF file is stored under project/public/download/info.pdf
        $material = Material::findorfail($id);
        $file= $material->file;
        return response()->download(public_path($file));
    }
}
