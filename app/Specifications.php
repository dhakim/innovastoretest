<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    //
    protected $table = 'specifications';
    public $timestamps = false;

    public function getSpecificationValues(){
        return $this->hasMany('App\SpecificationsValues', 'fkspecid');
    }
}
