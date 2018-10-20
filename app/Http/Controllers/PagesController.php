<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = 'WeCare';
        return view('pages.home')->with('title', $title);
    }

    public function donate() {
        $title = 'WeCare | Donate';
        return view('pages.donate')->with('title',$title);
    }

    public function about() {
        $title = 'WeCare | About';
        return view('pages.about')->with('title',$title);
    }

    public function contact() {
        $title = 'WeCare | Contact';
        return view('pages.contact')->with('title',$title);
    }

    public function login() {
        $title = 'WeCare | Login';
        return view('pages.login')->with('title',$title);
    }
}
