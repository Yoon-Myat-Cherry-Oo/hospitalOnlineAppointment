<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class FindController extends Controller
{
    public function findDoctorPage(){

        return view('user.find')->with(['doctors'=>0,'status'=>0]);

    }

    // public function searchDoctor(Request $request){
    //     $searchKey = $request->table_search;
    //     $searchData=Doctor::orWhere('name','like','%'.$searchKey.'%')
    //                      ->orWhere('department',$searchKey)
    //                      ->paginate(7);
    //     if(count($searchData) == 0){
    //         $emptyStatus = 0;
    //     }else{
    //         $emptyStatus =1;
    //     }
    //     return view('user.find')->with(['doctors'=>$searchData,'status'=>$emptyStatus]);
    // }
    public function find(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'doctorName'=>'required',

        //     'department'=>'required',

        //    ]);

        //    if($validator->fails()){
        //      return back()
        //                   ->withErrors($validator)
        //                   ->withInput();
        //    }
           $name = $request->doctorName;

           $department = $request->department;
           $searchData = DB::table('doctors')
           ->where('name', '=', $name)
           ->orWhere('department', '=' ,$department)
           ->get();

        if(count($searchData) == 0){
            $emptyStatus = 0;
        }else{
            $emptyStatus =1;
        }

        return view('User.find')
        ->with(['doctors'=>$searchData,'status'=>$emptyStatus]);
    }

}
