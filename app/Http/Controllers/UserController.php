<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;

class UserController extends Controller
{
    public function create(Request $req){
        


        // dd($req);


        // $user = new User();
        // $doctor = new Doctor();
        
        // $user->name = $req->get('name');
        // $user->email = $req->get('email');
        // $user->password = $req->get('password');
        // $user->role = 0;

        // $doctor->userid = 1;
        // $doctor->address = $req->get('address');
        // $doctor->phone = $req->get('phone');
        // $doctor->city = $req->get('city');
        // $doctor->age = $req->get('age');
        // $doctor->gender = $req->get('gender');
        // $doctor->specialization = $req->get('specialization');
        // $doctor->img = $req->get('img');

        // $user->save();
        // $doctor->save();

        // return view('Home.index');

    }
}
