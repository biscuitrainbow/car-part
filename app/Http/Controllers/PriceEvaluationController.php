<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spare;
use App\Brand;
use App\Serie;
use App\Part;

class PriceEvaluationController extends Controller
{
    public function create(Request $request)
    {
        $spares = Spare::all();
        $license_plate = $request->license_plate;
        $color = $request->color;
        $brand = Brand::find($request->brand);
        $serie = Serie::find($request->serie);
        $part = Part::find($request->part);

        return view('evaluation.create',compact('spares','license_plate','color','brand','serie','part'));
    }
}
