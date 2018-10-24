<?php

namespace App\Http\Controllers;

use App\Martyr;
use Illuminate\Http\Request;

class MartyrsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'WeCare | Donate';
        $martyrData = Martyr::orderBy('total_donations', 'asc')->paginate(8);
        return view('pages.donate')->with('title',$title)->with('martyrData',$martyrData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->id == 1) {
            $title = 'WeCare | Add Martyr(Admin)';
            return view('pages.newmartyr')->with('title', $title);
        }
        else {
            return redirect('/martyrs')->with('error', 'Unauthorized Access');
        }

    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'force' => 'required',
            'profile_image' => 'image|nullable|max:1999',
            'bank_name' => 'required',
            'account_no' => 'required',
            'ifsc_code' => 'required',
        ]);

        if ($request->hasFile('profile_photo')) {
            $fileNameWithExt = $request->file('profile_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileExt = $request->file('profile_photo')->getClientOriginalExtension();
            $fileNameToSave = 'martyr_'.$fileName.'_'.time().'.'.$fileExt;
            $fileNameToStore = 'storage/images/'.'martyr_'.$fileName.'_'.time().'.'.$fileExt;
            $path = $request->file('profile_photo')->storeAs('public/images',$fileNameToSave);
        }
        else {
             $fileNameToStore = 'assets/blank_profile.png';
        }

        $martyr = new Martyr;
        $martyr->name = $request->input('name');
        $martyr->city = $request->input('city');
        $martyr->force = $request->input('force');
        $martyr->martyr_date = $request->input('date');
        $martyr->family_mems = $request->input('family_mems');
        $martyr->bank_name = $request->input('bank_name');
        $martyr->account_no = $request->input('account_no');
        $martyr->ifsc_code = $request->input('ifsc_code');
        $martyr->photo_path = $fileNameToStore;
        $martyr->accepting_status = true;
        $martyr->total_donations = 0.0;

        $martyr->save();

        return redirect('/martyrs')->with('success', 'Martyr Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()){
            $martyrData = Martyr::find($id);
            $title = 'WeCare | Donate';
            return view('pages.martyrdetails')->with('title', $title)->with('martyrData',$martyrData);
        }
        else {
            return redirect('/login')->with('error', 'Login to donate');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title= "WeCare | Transaction";
        return view('pages.transactiondetailsform')->with('title', $title)->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
