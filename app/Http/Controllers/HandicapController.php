<?php

namespace App\Http\Controllers;

use App\Http\Requests\HandicapFormRequest;
use App\Models\Handicap;
use Illuminate\Http\Request;

class HandicapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.handicap.index', [
            'handicaps' =>  Handicap::all(),
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.handicap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HandicapFormRequest $request)
    {
        $request->validated();
        Handicap::create([
            'round_id' => $request->round_id,
            'handicap' => $request->handicap
         ]);
  
           return redirect('Handicaps/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function show(Handicap $handicap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function edit(Handicap $handicap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handicap $handicap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handicap $handicap)
    {
        //
    }
}
