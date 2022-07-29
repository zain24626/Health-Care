<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;

class IndexController extends Controller
{
    public function index(){

        $dbspecialization = Specialization::all();

        return view('Home.index')->with('SPECIALIZATION' , $dbspecialization);
    }
}
