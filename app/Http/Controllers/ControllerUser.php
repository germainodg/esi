<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    
    public function getInscrire(){
        request ()->validate([
       'nom'=>['required'],
        'prenom'=>['required'],
         'email'=>['required','email','unique:userrs'],
         'mot_de_passe'=>['required','min:8'],
         'mot_de_passe2'=>['required','same:password'],
        ]);
        $user=new User;
        $user->nom=request('nom');
        $user->prenom=request('prenom');
        $user->email=request('email');
        $user->mot_de_passe=\Hash::make(request('mot_de_passe'));
        $user->score=0;
        $user->save();
        return \Redirect::to('acceuil');
    }


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
