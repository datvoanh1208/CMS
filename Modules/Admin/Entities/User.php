<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    const USER_ID = 'id';
    const USER_NAME = 'name';
    const USER_EMAIL = 'email';
    const USER_PASSWORD = 'password';
    const USER_STATUS = 'status';
    const USER_CRATE_AT = 'created_at';
    const USER_UPDATED_AT = 'updated_at';
    const USER_DELETED_AT = 'deleted_at';
    const USER_REMEMBER_TOKEN = 'remember_token';

    /**
     * @var array
     */
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
}
