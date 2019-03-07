<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsSpecifications extends Model
{
    //
    protected $table = 'products_specifications';
    public $timestamps = false;

    public function getSpecificationData(){
        return $this->hasOne(SpecificationsValues::class, 'id', 'fkspecvalid');
    }
}
