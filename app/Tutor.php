<?php

namespace Pediatra;

use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Tutor extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;


    protected $table = "tutors";

     protected $fillable = ['nombreTutor', 'apellidoTutor', 'emailTutor', 'passwordTutor', 'telefonoTutor','especialidadTutor', 'organizacionTutor', 'estadoTutor', 'ciudadTutor', 'localidadTutor', 'postalTutor', 'id_especialista', 'id_infante'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['passwordTutor', 'remember_token'];


    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['passwordTutor'] = \Hash::make($valor);
        }
    }



}
