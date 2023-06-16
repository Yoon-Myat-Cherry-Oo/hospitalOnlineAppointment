<?php

namespace App\Http\Controllers;

use App\Models\Accept;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    public function acceptList(){
        $data=Accept::paginate(7);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.accept.acceptList')->with(['accepts'=>$data,'status'=>$emptyStatus]);

    }
    public function accept($id){
        $result=Appointment::select('*')->where('appointment_id',$id)->first();
        $data=[
            'name'=> $result->name,
            'email'=>$result->email,
            'department'=>$result->department,
            'date'=>$result->date,
            'number'=>$result->number,
            'message' => $result->message,

        ];
        Accept::create($data);
        // return view('admin.appointment.appointmentList')->with(["success"=>"Appointment accepted!.....",'status','appointments']);
    }

    public function seemoreAccept($id,Request $request){
        // $data=Accept::where('appointment_id',$id)->first();

        // return view('admin.doctor.info')->with(['doctors' => $data]);
    }
}
