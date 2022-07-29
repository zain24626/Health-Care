<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;
use DB;

class SearchController extends Controller
{
    public function index(){
        $searchQuery = $_GET['query'];

        $searched = Specialization::find($searchQuery);
        
        $searched->name;
        
        // $searchedSpecialist = Specialization::where('specializations.name' , 'LIKE' , '%'.$searched.'%')->get();


        $result = DB::table('users')->select('users.*' , 'users.name as username', 'doctors.*' , 
         'specializations.name as docspecialization' , )
        ->join('doctors' , 'doctors.userid' , '=' , 'users.id')
        ->join('specializations' , 'specializations.id' , '=' , 'doctors.specialization')
        ->get([ 'users.name' , 'specialization.name' , 
        'cities.name'  ])->where('specialization.name' ,'%'.$searched->name.'%');
        $data['result'] = $result;
        dd($result);
        return view('SearchedDoctors.SearchedDoctors' , $data);


        
        // return $searched->name;

    }
}
