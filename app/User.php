<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {   

        return $this->hasMany(Post::class,'auther_id');
    }

    public function getRouteKeyName(){

        return 'slug';
    }


    public function gravatar(){
        $email = $this->email;
        $default = "https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png";
        $size = 20;

        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    }
    public function getbiohtmlAttribute($value){


        return $this->bio ? Markdown::convertToHtml(e($this->bio)) :NULL;
    }
    public function setPasswordAttribute($value)
    {
        if (!empty($value)) $this->attributes['password'] = bcrypt($value);
    }
    
}
