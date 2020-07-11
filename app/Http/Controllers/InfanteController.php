<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;
use Pediatra\Tutor;
use Pediatra\Infante;
use Pediatra\State;
use Pediatra\Town;
use Pediatra\Concepto;

use DB;

class InfanteController extends Controller
{


    public function __construct(){

        $this->beforeFilter('@find',['only'=> ['edit','update','destroy']]);
    }

    public function find(Route $route){
         $this->infante = Infante::find($route->getParameter('infante'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = Infante::Infantes();
       return view('infante.index',compact('users'));
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::lists('name','id');
      
        return view('infante.create',compact('states','sexos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id = Infante::create($request->all())->id;

      Tutor::create([
            'nombreTutor' => $request['nombreTutor'],
            'apellidoTutor' => $request['apellidoTutor'],
            'emailTutor' => $request['emailTutor'],
            'passwordTutor' => $request['passwordTutor'],
            'telefonoTutor' => $request['telefonoTutor'],
            'estadoTutor' => $request['estadoTutor'],
            'ciudadTutor' => $request['ciudadTutor'],
            'localidadTutor' => $request['localidadTutor'],
            'postalTutor' => $request['postalTutor'],
            'id_especialista' => $request['id_especialista'],
            'id_infante' => $id,
            ]);

        
        //$id = Infante::insertGetId($request->all());
        //$this->infante->save();

        Session::flash('message','Paciente y Tutor agregado correctamente');
        return redirect::to('/infante');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutores = Infante::Tutores($id);
        return view('infante.tutor',['infante'=> $tutores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = State::lists('name','id');
        $towns = DB::table('infantes')->where('id','=',$id)->lists('ciudad','ciudad');
        $sexo = DB::table('infantes')->where('id','=',$id)->lists('sexo','sexo');
        $infante = Infante::find($id);
        return view('infante.edit',compact('states','towns','sexo'),['infante' => $this->infante]);
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
        $this->infante->fill($request->all());
        $this->infante->save();

        Session::flash('message','Infante Editado Correctamente');
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
      $this->infante = Infante::find($id);
      $this->infante->delete();
      Session::flash('message','Usuario Eliminado Correctamente');
      return redirect::to('/infante');

    }
}
