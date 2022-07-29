<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use DB;

class InfoController extends Controller
{
    public function index(){

        $loggedinUser = auth()->user()->id;
        
        $role = auth()->user()->role;

        // switch($role){

        //     case 1:

            if($role == 1){

                
                $result = DB::table('users')->select('users.*' , 'users.name as username', 'doctors.*' , 'users.email as useremail' , 
                'doctors.address as docaddress' , 'doctors.phone as docphone' , 'doctors.age as docage' , 
                'doctors.gender as docgender' , 'specializations.name as docspecialization' , 
                'cities.name as cityname')
                ->join('doctors' , 'doctors.userid' , '=' , 'users.id')
                ->join('specializations' , 'specializations.id' , '=' , 'doctors.specialization')
                ->join('cities' , 'cities.id' , '=' , 'doctors.city')
                ->get([ 'users.name' , 'users.email' , 'specialization.name' ,'doctors.address' , 
                'doctors.phone' , 'doctors.age' , 'doctors.gender' , 'cities.name'  ])->where('id' , '=' , $loggedinUser);
                $data['result'] = $result;
                return view('DoctorInfo.DoctorInfo' , $data);
            
            }
                
            // break;

            // case 2:
            //     elseif($role == 2){

                    
            //             $result = DB::table('users')->select('users.*' , 'users.name as patientsusername', 'users.email as patientsuseremail' , 
            //             'patients.*' ,'patients.address as patientsaddress' , 'patients.phone as patientsphone' , 'patients.age as patientsage' , 
            //             'patients.gender as patientsgender' , 
            //         'cities.name as cityname')
            //         ->join('patients' , 'patients.userid' , '=' , 'users.id')
            //         ->join('cities' , 'cities.id' , '=' , 'patients.city')
            //         ->get([ 'users.name' , 'users.email' , 'patients.address' , 
            //         'patients.phone' , 'patients.age' , 'patients.gender' , 'cities.name'  ])->where('id' , '=' , $loggedinUser);
            //         $patientsdata['result'] = $result;
                    
            //     return view('PatientInfo.PatientInfo' , $patientsdata);
                
            // }

        // }

        return 'invalid';

    }
}
