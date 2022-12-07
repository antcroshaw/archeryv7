<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoundFormRequest;
use App\Models\Category;
use App\Models\Handicap;
use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.round.index', [
            'rounds' =>  Round::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('auth.round.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoundFormRequest $request)
    {
        $request->validated();

       Round::create([
          'name' => $request->name,
          'location' => $request->location,
          'category_id' => $request->category_id
       ]);

         return redirect('Categories/' . $request->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Round  $handicap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view('auth.round.show', [

            'round' => Round::find($id),
            'handicaps' => Handicap::where('round_id',$id)->orderBy('handicap','asc')->paginate(10)
        ]);
    }

    public function inc($id) {
        $handicap = Handicap::find($id);
        $handicap->score++;
        $handicap->save();
        return back();
    }

    public function dec($id) {
        $handicap = Handicap::find($id);
        $handicap->score--;
        $handicap->save();
        return back();
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Round  $handicap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('auth.round.edit', [
            'round' => Round::where('id',$id)->first(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Round  $handicap
     * @return \Illuminate\Http\Response
     */
    public function update(RoundFormRequest $request,$id)
    {
        $request->validated();

        Round::where('id',$id)->update([
            'name' => $request->name,
            'location' => $request->location,
            'category_id' => $request->category_id
        ]);
        return redirect('Categories/' . $request->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Round  $handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $round = Round::findOrFail($id);
        Round::findOrFail($id)->delete();

        return redirect('Rounds/')->with('message', 'Round has been deleted successfully');
    }
}
