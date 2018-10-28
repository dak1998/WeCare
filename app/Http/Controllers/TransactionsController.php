<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'amount' => 'required',
        ]);

        $transaction = new Transaction;
        $transaction->trans_id = 101192012;
        $transaction->from_uid = auth()->user()->id;
        $transaction->to_mid = $request->input('to_uid');
        $transaction->trans_date = date("Y-m-d") ;
        $transaction->amount = $request->input('amount');
        $transaction->status = true;

        $amount = $request->input('amount');
        $message = trim($request->input('message'));

        $transaction->save();

        $title = 'WeCare | Confirm Payment';

        return view('pages.payWithRazorpay')
            ->with('title', $title)
            ->with('name', auth()->user()->name)
            ->with('amount', $amount)
            ->with('email', auth()->user()->email)
            ->with('transmessage', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
