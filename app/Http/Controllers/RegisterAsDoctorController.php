<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\City;
use App\Models\Specialization;
use App\Models\Qualification;
use App\Models\Doc_Qualification;

class RegisterAsDoctorController extends Controller
{

    public function registerDoctorView(){

        $cities = City::all();

        $specialization = Specialization::all();

        $qualification = Qualification::all();

        return view('auth.RegisterAsDoctor.RegisterAsDoctor')->with('CITIES' , $cities)->with('SPECIALIZATION' , $specialization);
    }
    
    public function createDoctor(Request $req){

        $dbcities =  City::find($req->get('city'));
        $dbcities = $dbcities->id;
        
        $dbspecialization =  Specialization::find($req->get('specialization'));
        $dbspecialization = $dbspecialization->id; 

        // dd($dbspecialization);

        
        $doctor = new Doctor();
        
        $doctor->userid = auth()->user()->id;
        $doctor->address = $req->get('address');
        $doctor->phone = $req->get('phone');
        $doctor->city = $dbcities;
        $doctor->age = $req->get('age');
        $doctor->gender = $req->get('gender');
        $doctor->specialization = $dbspecialization;
        $doctor->img = $req->get('img');
        
        $doctor->save();

        // $formQualification = Qualification::find($req->get('qualification'));
        // $formQualification = $formQualification->id;
        
        // $docqualification = new Doc_Qualification();
        
        // $docqualification->userid = auth()->user()->id;
        
        // $docqualification->qualificationid = $formQualification;
        
        // $docqualification->save();
        // dd($docqualification->qualificationid);

        return view('Home.index');


    }


}
