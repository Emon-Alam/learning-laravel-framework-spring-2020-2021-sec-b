<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

   
    const UPDATED_AT = 'last_updated';
}
