<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\UserData;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home',[
            'user_data'=> UserData::count(),
            'contact'=> Contact::count(),
           
        ]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function panduan(){
        return view('pages.panduan');
    }

    public function kpu(){
        return view('pages.kpu');
    }

}
    