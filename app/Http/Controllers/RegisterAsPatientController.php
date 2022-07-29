<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Patient;

class RegisterAsPatientController extends Controller
{
    public function registerPatientView(){

        $cities = City::all();

       

        return view('auth.RegisterAsPatient.RegisterAsPatient')->with('CITIES' , $cities);
    }

    public function createPatient(Request $req){

        $dbcities =  City::find($req->get('city'));
        $dbcities = $dbcities->id;
        
        $patient = new Patient();
        
        $patient->userid = auth()->user()->id;
        $patient->address = $req->get('address');
        $patient->phone = $req->get('phone');
        $patient->city = $dbcities;
        $patient->age = $req->get('age');
        $patient->gender = $req->get('gender');
        // $patient->img = $req->get('img');
        
        $patient->save();

        return view('Home.index');


    }
}
