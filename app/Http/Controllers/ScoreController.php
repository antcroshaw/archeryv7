<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScoreFormRequest;
use App\Models\Archer;
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
    public function store(ScoreFormRequest $request)
    {
       
        $request->validated();
  
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
    public function show($id)
    {
        return view('auth.score.show', [

            'score' => Score::find($id),
           
        ]);
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
    public function update(ScoreFormRequest $request, $id)
    {
        $request->validated();
  
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
