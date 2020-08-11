<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // return view('pages.index', compact('title'));
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
