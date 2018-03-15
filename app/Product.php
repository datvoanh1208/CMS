<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model  as Eloquent;

class Product extends Eloquent
{

    protected $connection   = 'mongodb';
    protected $collection   = 'product';
    public $timestamps      = true;

    const PRODUCT_ID            = 'id';
    const PRODUCT_NAME          = 'name';
    const PRODUCT_DESCRIPTION   = 'description';
    const PRODUCT_PRICE         = 'price';
    const PRODUCT_CREATED_AT    = 'created_at';
    const PRODUCT_UPDATED_AT    = 'updated_at';
    const PRODUCT_DELETED_AT    = 'deleted_at';

    protected $fillable = [
        self::PRODUCT_NAME,
        self::PRODUCT_DESCRIPTION,
        self::PRODUCT_PRICE
    ];

    protected $hidden = [
        self::PRODUCT_CREATED_AT,
        self::PRODUCT_UPDATED_AT,
        self::PRODUCT_DELETED_AT,
    ];

}
