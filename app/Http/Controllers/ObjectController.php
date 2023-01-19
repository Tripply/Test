<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JsonObjectController;
use App\Models\object__of__evaluations;
use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function index(){
        $objects=object__of__evaluations::all();
        return view('Objects',compact('objects'));
    }
}
