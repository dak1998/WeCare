<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Martyr;

class PagesController extends Controller
{
    public function home() {
        $title = 'WeCare';
        return view('pages.home')->with('title', $title);
    }

    /*public function donate() {
        $title = 'WeCare | Donate';
        $martyrData = Martyr::all();
        return view('pages.donate')->with('title',$title)->with('martyrData',$martyrData);
    }*/

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
