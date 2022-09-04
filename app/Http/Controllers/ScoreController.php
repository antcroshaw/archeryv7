<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.score.index', [
            'scores' =>  Score::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.score.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'round_id' => 'required',
            'archer_id' => 'required',
            'location' => 'required',
            'score' => 'required'
        ]);
  
       Score::create([
          'round_id' => $request->round_id,
          'archer_id' => $request->archer_id,
          'location' => $request->location,
          'score' => $request->score
       ]);
         return redirect(route('Scores.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('auth.score.edit', [
            'score' => Score::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'round_id' => 'required',
            'archer_id' => 'required',
            'location' => 'required',
            'score' => 'required'
        ]);
  
       Score::where('id',$id)->update([
          'round_id' => $request->round_id,
          'archer_id' => $request->archer_id,
          'location' => $request->location,
          'score' => $request->score
       ]);
         return redirect(route('Scores.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Score::destroy($id);
        return redirect(route('Scores.index'));
    }
}
