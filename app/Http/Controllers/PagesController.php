<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){return view('dashboard');}
    public function getAbout(){return view('about');}
    public function getContact(){return view('contact');}
    public function getMessage(){return view('messages');}

}
