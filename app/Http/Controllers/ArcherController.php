<?php

namespace App\Http\Controllers;

use App\Models\Archer;
use App\Models\Score;
use Illuminate\Http\Request;

class ArcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.archer.index', [
            'archers' =>  Archer::all(),
           
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('auth.archer.show', [
            'archer' => Archer::find($id),
           'scores' => $scores = Score::where('archer_id', $id)->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function edit(Archer $archer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archer $archer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archer $archer)
    {
        //
    }
}
