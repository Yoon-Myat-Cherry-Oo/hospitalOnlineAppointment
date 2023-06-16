<?php

namespace App\Http\Controllers;


use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientList(){
        $data=Appointment::where('status',1)->paginate(7);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.patient.patientList')->with(['accepts'=>$data,'status'=>$emptyStatus]);

}
    public function emailView($id){
        return view('patient.emailView');
    }

    public function search(Request $request){
        $searchKey = $request->table_search;
        $searchData=Appointment::where('status',1)
                         ->Where('name','like','%'.$searchKey.'%')
                         ->orWhere('department','like','%'.$searchKey.'%')
                         ->paginate(7);
        if(count($searchData) == 0){
            $emptyStatus = 0;
        }else{
            $emptyStatus =1;
        }
        return view('admin.patient.patientList')
        ->with(['accepts'=>$searchData,'status'=>$emptyStatus]);
    }
}
