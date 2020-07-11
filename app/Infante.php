<?php

namespace Pediatra;

use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;



class Infante extends Model
{
    protected $table = "infantes";


protected $fillable = ['nombre','apellido', 'edad', 'sexo','estado','ciudad','localidad','postal','path','id_especialista'];


    public function setPathAttribute($path){

        
       $image = Image::make($path);

       $destinationPath =  public_path().'/perfil/';

       $image->save($destinationPath.$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName());

       $image->resize(900, 900);

       $image->save($destinationPath.'thumb_'.$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName());
         //$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
       //$name = Carbon::now()->second.$path->getClientOriginalName();
         //\Storage::disk('local')->put($name, \File::get($image));   

  }


    protected $hidden = ['password', 'remember_token'];


     public static function Infantes(){

     	$user_id = Auth::especialista()->get()->id;

        return DB::table('infantes')
        ->join('especialistas','especialistas.id','=','infantes.id_especialista')
        ->where('especialistas.id','=', $user_id)
        ->select('infantes.*')
        ->get();
    }

    public static function tutores($id)
    {
        return DB::table('infantes')
        ->join('tutors','tutors.id_infante','=','infantes.id')
        ->where('tutors.id_infante', '=' , $id)
        ->select('tutors.*')
        ->get();
    }
}
