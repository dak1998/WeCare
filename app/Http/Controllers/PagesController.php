<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function profile() {

        $user = auth()->user();
        $title = 'Profile | '.$user->name;
        if($user->total_donated > 0){

            $transactionForUser = DB::select(DB::raw
            ('SELECT t.id, t.amount, t.trans_date, t.status, t.to_mid, m.id, m.name, m.force
            FROM users u, martyrs m, transactions t 
            WHERE t.from_uid = '.$user->id.' AND t.to_mid = m.id;'));


            return view('pages.profile')
                ->with('title',$title)
                ->with('user', $user)
                ->with('transactionForUser', $transactionForUser);
        }
        else
            return view('pages.profile')->with('title',$title)->with('user', $user);
    }

    public function login() {
        $title = 'WeCare | Login';
        return view('pages.login')->with('title',$title);
    }
}
