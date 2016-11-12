<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Custom namespace
use App\PaymentConfirmation;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PaymentConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'amount' => 'required|integer',
            'sender_name' => 'required',
            'bank' => 'required',
        ]);

        $pc = new PaymentConfirmation;
        if($request->hasFile('proof') && $request->file('proof')->isValid()) {
            return $request->proof;
            $destinationPath = 'uploads/confirms';
            $extension = $request->proof->extension();
            $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
            $request->proof->storeAs($destinationPath, $fileName);
            $pc->image = $fileName;
        }
        $pc->user_id = Auth::user()->id;
        $pc->amount = $request->amout;
        $pc->sender_name = $request->sender_name;
        $pc->bank = $request->bank;
        $pc->save();

        Session::flash('success', '1');
        return Redirect::to('balance/confirm');

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
