<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('auth.handicap.create', ['categories' => Category::all()]);
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
            'name' => 'required',
            'location' => 'required',
            'category_id' => 'required'
        ]);
  
       Handicap::create([
          'name' => $request->name,
          'location' => $request->location,
          'category_id' => $request->category_id
       ]);
       
         return redirect('Categories/' . $request->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    
        return view('auth.handicap.show', [
           
            'handicap' => Handicap::find($id),
        ]);
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

        return redirect('Categories/' . $handicap->category_id);
    }
}
