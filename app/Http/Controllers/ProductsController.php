<?php

namespace App\Http\Controllers;

use App\Products;

class ProductsController extends Controller
{
    //
    public function index(){
        dd(Products::with(['getProductSpecifications', 'getProductSpecifications.getSpecificationData', 'getProductSpecifications.getSpecificationData.getSpecification'])->get());
    }

    public function show($id){
        $product = Products::with(['getProductSpecifications', 'getProductSpecifications.getSpecificationData', 'getProductSpecifications.getSpecificationData.getSpecification'])->where(['id' => $id])->get();
        dd($product);
    }
}
