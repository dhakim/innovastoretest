<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    public $timestamps = false;

    public function getProductSpecifications(){
        return $this->hasMany(ProductsSpecifications::class, 'fkprodid');
    }
}
