<?php

namespace App\Http\Controllers;

use App\Models\Archer;
use App\Models\Score;
use Illuminate\Http\Request;
use App\Http\Requests\ArcherFormRequest;

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
        return view('auth.archer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArcherFormRequest $request)
    {
       
        $request->validated();
        Archer::create([
            'name' => $request->name,
            'DOB' => $request->DOB,
            'sex' => $request->sex
         ]);
  
           return redirect('Archers/')->with('message', 'Archer has been added successfully');
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
    public function edit($id)
    {

    
        return view('auth.archer.edit', [
            'archer' => Archer::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function update(ArcherFormRequest $request, $id)
    {
        $request->validated();

        Archer::where('id',$id)->update([
            'name' => $request->name,
            'DOB' => $request->DOB,
            'sex' => $request->sex
        ]);
        return redirect('Archers/' . $request->id)->with('message', 'Archer has been updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archer  $archer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Archer::findOrFail($id)->delete();

        return redirect('Archers/')->with('message', 'Archer has been deleted successfully');
    }
}
