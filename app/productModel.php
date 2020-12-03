<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    // Table name
    protected $table = 'products';
    
    // Product key
    public $primaryKey = 'id';
    
    // Timestamps
    public $timestamps = true;

}
