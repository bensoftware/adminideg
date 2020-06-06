<?php

namespace App\Http\Controllers;

use App\Institut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstitutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('institut.institut');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('institut.addform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

            // var_dump($request->responsable);

            $validator = Validator::make($request->all(), [
                        'libelle' => 'required|unique:instituts|max:255',
                        'description' => 'required',
                        'mail'=>'required',
                        'phone'=>'required',
                        'fixe'=>'required',
                        'adresse'=>'required',
                        'responsable'=>'required'
                    ]);

                    if ($validator->fails()) {
                        return redirect(route('institut.create'))
                                    ->withErrors($validator)
                                    ->withInput();
                    }

         $institut=new Institut();

        Institut::create([
          'libelle'=>$request->libelle,
          'description'=>$request->description,
          'mail'=>$request->mail,
          'phone'=>$request->phone,
          'fixe'=>$request->fixe,
          'adresse'=>$request->adresse,
          'responsable'=>$request->responsable
        ]);
        return redirect(route('institut.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institut  $institut
     * @return \Illuminate\Http\Response
     */
    public function show(Institut $institut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institut  $institut
     * @return \Illuminate\Http\Response
     */
    public function edit(Institut $institut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institut  $institut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institut $institut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institut  $institut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institut $institut)
    {
        //
    }
}
