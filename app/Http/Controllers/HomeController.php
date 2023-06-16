<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function index(){
        return view('user.index');
    }

    public function about(){
        return view('user.about');
    }

    public function doctor(){
        return view('user.doctor');
    }

    public function news(){
        return view('user.news');
    }

    public function service(){
        return view('user.service');
    }

    public function review(){
        return view('user.review');
    }

    public function contact(){
        return view('user.contact');
    }

    public function seeMore($id){
        $data = Doctor::where('doctor_id',$id)->first();
        return view('User.seeMoreDoctor')->with(['doctors'=>$data]);
    }

    // public function find(){
    //     $data=Doctor::paginate(7);
    //     if(count($data) == 0){
    //         $emptyStatus = 0;
    //     }
    //     else{
    //         $emptyStatus = 1;
    //     }
    //     return view('user.find')->with(['doctors'=>$data,'status'=>$emptyStatus]);

    // }

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

    public function speciality(){
        return view('user.speciality');
    }

    public function laboratory(){
        return view('user.laboratory');
    }
}
