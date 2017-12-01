<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){

        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}
