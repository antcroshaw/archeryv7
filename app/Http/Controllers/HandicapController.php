<?php

namespace App\Http\Controllers;

use App\Http\Requests\HandicapFormRequest;
use App\Models\Handicap;
use App\Models\Round;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        return view('auth.handicap.create', ['name' => $name,  'rounds' =>  Round::all()]);
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
           'handicap' => $request->handicap,
           'score' => $request->score
        ]);
 
        return view('auth.round.show', [
 
         'round' => Round::find($request->round_id),
         'handicaps' => Handicap::where('round_id',$request->round_id)->get()
     ]);
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
    public function destroy($id)
    {
        $handicap = Handicap::findOrFail($id);
        Handicap::findOrFail($id)->delete();

        return redirect('Rounds/' . $handicap->round_id);
    }
}
