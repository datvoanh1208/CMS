<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    const ADMIN_ID = 'id';
    const ADMIN_NAME = 'name';
    const ADMIN_EMAIL = 'email';
    const ADMIN_PASSWORD = 'password';
    const ADMIN_STATUS = 'status';
    const ADMIN_CRATE_AT = 'created_at';
    const ADMIN_UPDATED_AT = 'updated_at';
    const ADMIN_DELETED_AT = 'deleted_at';
    const ADMIN_REMEMBER_TOKEN = 'remember_token';

    /**
     * @var array
     */
    protected $fillable = [
        self::ADMIN_NAME,
        self::ADMIN_EMAIL,
        self::ADMIN_STATUS,
        self::ADMIN_CRATE_AT
    ];

    /**
     * @var array
     */
    protected $hidden = [
        self::ADMIN_PASSWORD,
        self::ADMIN_REMEMBER_TOKEN
    ];

    /**
     * @var array
     */
    protected $guarded = [
        self::ADMIN_ID
    ];
}
