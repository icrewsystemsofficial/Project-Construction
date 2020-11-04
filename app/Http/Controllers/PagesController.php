<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index') -> with('title', $title);
    }

    public function about(){
        $title = 'About Page';
        return view('pages.about')-> with('title', $title);
    }

    public function services(){
        $title = array(
            'tit' => 'Services',
            'data' => ['web', 'pro', 'hashtag']
        );
        return view('pages.services')-> with($title);
    }

    public function contact($contact_no, $name){
        $a = $contact_no;
        $b = $name;
        return view('contact', ['name' => $b, 'contact' => $a]);
        
        
    }
}
