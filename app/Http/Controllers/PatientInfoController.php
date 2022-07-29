<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientInfoController extends Controller
{
    public function index(){

        $loggedinUser = auth()->user()->id; 

        dd($loggedinUser);

        // $result = DB::table('users')->select('users.*' , 'users.name as username', 'doctors.*' , 'users.email as useremail' , 
        //                           'doctors.address as docaddress' , 'doctors.phone as docphone' , 'doctors.age as docage' , 
        //                           'doctors.gender as docgender' , 'specializations.name as docspecialization' , 
        //                            'cities.name as cityname')
        //                           ->join('doctors' , 'doctors.userid' , '=' , 'users.id')
        //                           ->join('specializations' , 'specializations.id' , '=' , 'doctors.specialization')
        //                           ->join('cities' , 'cities.id' , '=' , 'doctors.city')
        //                           ->get([ 'users.name' , 'users.email' , 'specialization.name' ,'doctors.address' , 
        //                           'doctors.phone' , 'doctors.age' , 'doctors.gender' , 'cities.name'  ])->where('id' , '=' , $loggedinUser);
        // $data['result'] = $result;
        // return view('PatientInfo.PatientInfo' , $data);
    }
}
