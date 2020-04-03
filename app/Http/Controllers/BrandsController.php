<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandsController extends Controller
{
    public function view(){
        $brands = Brand::orderBy('range')->paginate(7);
        return view('brands', ['brands' => $brands]);
    }
}
