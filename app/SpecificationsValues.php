<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecificationsValues extends Model
{
    //
    protected $table = 'specifications_values';
    public $timestamps = false;

    public function getSpecification(){
        return $this->hasOne(Specifications::class, 'id', 'fkspecid');
    }
}
