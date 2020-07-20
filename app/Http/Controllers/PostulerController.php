<?php

namespace App\Http\Controllers;

use App\Postuler;
use Illuminate\Http\Request;

class PostulerController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $postulers=Postuler::all();
      return view('postuler.index')->with('postulers',$postulers);
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
     * @param  \App\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(Postuler $postuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function edit(Postuler $postuler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postuler $postuler)
    {
        //
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postuler $postuler){
        $postuler = Postuler::find($postuler->id);
        $postuler->delete();
        return redirect('/admin/postuler')->with('success','applicants deleted!');
    }
    
}
