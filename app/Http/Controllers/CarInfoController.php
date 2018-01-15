<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Part;
use App\Serie;

class CarInfoController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        $series = Serie::all();
        $parts = Part::all();

        return view('info.create', compact('brands', 'series', 'parts'));
    }
}
