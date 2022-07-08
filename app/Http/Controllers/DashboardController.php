<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'user_data'=> User::count(),
            'contact'=> Contact::count(),
           
        ]);
    }
}
