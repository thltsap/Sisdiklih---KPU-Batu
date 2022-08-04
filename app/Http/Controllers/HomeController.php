<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

   
}
    