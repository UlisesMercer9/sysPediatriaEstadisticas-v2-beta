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

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','path'];


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


}
