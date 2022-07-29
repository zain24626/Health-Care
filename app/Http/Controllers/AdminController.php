<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use DB;

class AdminController extends Controller
{
    public function index()
    {

        $totalusers = User::all();

        $user = User::with(['Doctor.Specialization'])->whereHas('Doctor.Specialization')->get();
        // $doctor = Doctor::with(['specialization'])->get();
        
            // dd($user);
        // $totalusers = User::all()->count();
        
        // for($i = 1 ; $i<=$totalusers; $i++)
        // {
            
        //     $result = DB::table('users')->select('users.*' , 'users.name as username', 'doctors.*' , 'users.email as useremail' , 
        //     'doctors.address as docaddress' , 'doctors.phone as docphone' , 'doctors.age as docage' , 
        //     'doctors.gender as docgender' , 'specializations.name as docspecialization' , 
        //     'cities.name as cityname')
        //     ->join('doctors' , 'doctors.userid' , '=' , 'users.id')
        //     ->join('specializations' , 'specializations.id' , '=' , 'doctors.specialization')
        //     ->join('cities' , 'cities.id' , '=' , 'doctors.city')
        //     ->get([ 'users.name' , 'users.email' , 'specialization.name' ,'doctors.address' , 
        //     'doctors.phone' , 'doctors.age' , 'doctors.gender' , 'cities.name' ])->where('id' , '=' , $i);
        //     $data['result'] = $result;
            
                
                
        //     return view('Dashboard.Dashboard' , $data);
        // }
        return view('Dashboard.Dashboard')->with('USERS' , $user);
    }
}
