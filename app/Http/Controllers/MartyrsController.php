<?php

namespace App\Http\Controllers;

use App\Martyr;
use Illuminate\Http\Request;

class MartyrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'WeCare | Donate';
        $martyrData = Martyr::orderBy('total_donations', 'asc')->paginate(5);
        return view('pages.donate')->with('title',$title)->with('martyrData',$martyrData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'WeCare | Add Martyr(Admin)';
        return view('pages.newmartyr')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'force' => 'required',
        ]);

        $martyr = new Martyr;
        $martyr->name = $request->input('name');
        $martyr->city = $request->input('city');
        $martyr->force = $request->input('force');
        $martyr->martyr_date = $request->input('date');
        $martyr->family_mems = $request->input('family_mems');
        $martyr->photo_path = 'path';
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
        return Martyr::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
