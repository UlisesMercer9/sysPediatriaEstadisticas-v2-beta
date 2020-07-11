<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;
use Pediatra\Tutor;
use Pediatra\Infante;
use Pediatra\State;
use Pediatra\Town;
use DB;


class TutorController extends Controller
{

     public function __construct(){

        $this->beforeFilter('@find',['only'=> ['edit','update','destroy']]);
    }

    public function find(Route $route){
         $this->tutor = Tutor::find($route->getParameter('tutor'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    

    public function index()
    {
         return view('tutor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
          //$infantes = DB::table('infantes')->select(DB::raw('concat (nombre," ",apellido) as full_name,id'))->orderBy('nombre')->lists('full_name', 'id');
          $query = Infante::select('id')->orderBy('id','DESC')->first();

          $infante = $query->id;

          

          $states = State::lists('name','id');
          return view('tutor.create',compact('infantes','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $id_infante = $id;

      $infantes = Infante::lists('nombre','id');
      
     
       $states = State::lists('name','id');
       $towns = DB::table('tutors')->where('id','=',$id)->lists('ciudadTutor','ciudadTutor');

       $tutor = Tutor::find($id_infante);
      
      
      return view('tutor.edit',compact('infantes','states','towns'), ['tutor' => $this->tutor]);
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
      $this->tutor->fill($request->all());
      $this->tutor->save();

      Session::flash('message','Tutor Editado Correctamente');
      return redirect::to('/infante');
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
