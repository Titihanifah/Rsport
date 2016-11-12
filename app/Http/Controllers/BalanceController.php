<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Custom namespace
use App\TopUp;
use Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BalanceController extends Controller
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
     /**
     *
     *
     */
    public function create()
    {
        $tenggang = TopUp::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->take(1)->get();
        return View('balance.create')->with('tenggang', $tenggang);
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
        ]);

        $topup = new TopUp;
        $topup->user_id = Auth::user()->id;
        $topup->amount = $request->amount;
        $topup->description = "Isi saldo user id:" . Auth::user()->id . " sebesar " . $request->amount;
        $topup->save();

        $tenggang = TopUp::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->take(1)->get();
        return View('balance.create')->with('tenggang', $tenggang);

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
