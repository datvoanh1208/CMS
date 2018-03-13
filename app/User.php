<?php
/**
 * Created by PhpStorm.
 * User: pss
 * Date: 02/03/2018
 * Time: 15:32
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Eloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use Notifiable;
    protected $connection = 'mongodb';
    protected $collection = 'user';
    public $timestamps = false;

    const USER_ID = 'id';
    const USER_NAME = 'name';
    const USER_EMAIL = 'email';
    const USER_PASSWORD = 'password';
    const USER_STATUS = 'status';
    const USER_CRATE_AT = 'created_at';
    const USER_UPDATED_AT = 'updated_at';
    const USER_DELETED_AT = 'deleted_at';
    const USER_REMEMBER_TOKEN = 'remember_token';

    protected $fillable = [
        self::USER_NAME,
        self::USER_EMAIL,
        self::USER_STATUS,
        self::USER_CRATE_AT
    ];

    /**
     * @var array
     */
    protected $hidden = [
        self::USER_PASSWORD,
        self::USER_REMEMBER_TOKEN
    ];

    /**
     * @var array
     */
    protected $guarded = [
        self::USER_ID
    ];

    /**
     * @return mixed|string
     */
    public function getAuthPassword()
    {
        return $this->{User::USER_PASSWORD};
    }

    /**
     * @param null $email
     * @return bool
     */
    public function checkExitEmail($email = null){
        if($email != null && $this->count($this->where('email','=', 'email')->first()) > 0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param null $email
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function getAuthention($email = null){
        return User::where(User::USER_EMAIL, $email)->first();
    }
}