<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function services(){
        return view('pages.services');
    }

    public function contact(){
        return view('pages.contact');
    }
}
