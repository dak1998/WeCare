<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = 'WeCare';
        return view('welcome')->with('title', $title);
    }
    public function about() {
        $title = 'WeCare | About';
        return view('pages.about')->with('title',$title);
    }
}
