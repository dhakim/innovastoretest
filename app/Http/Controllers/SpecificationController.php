<?php

namespace App\Http\Controllers;

use App\Specifications;

class SpecificationController extends Controller
{
    //
    public function index(){
        dd(Specifications::all());
    }

    public function show($id){
        dd(Specifications::find($id)->getSpecificationValues);
    }
}
