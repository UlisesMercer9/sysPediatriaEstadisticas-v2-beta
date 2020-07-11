<?php

namespace Pediatra;

use DB;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Especialista extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;


    protected $table = "especialistas";



    protected $fillable = ['cedula', 'nombre', 'apellidos', 'email', 'password', 'telefono','especialidad', 'organizacion', 'estado', 'ciudad', 'localidad', 'postal','path'];

    public function setPathAttribute($path){

       $image = Image::make($path);

       $destinationPath =  public_path().'/perfil/';

       $image->save($destinationPath.$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName());

       $image->resize(900, 900);

       $image->save($destinationPath.'thumb_'.$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName());
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public static function Town($id)
    {
        return DB::table('especialistas')
        ->join('infantes','infantes.id_especialista','=','especialistas.id')
        ->where('infantes.id_especialista', '=' , $id)
        ->select('especialistas.*')
        ->get();
    }


    
}
