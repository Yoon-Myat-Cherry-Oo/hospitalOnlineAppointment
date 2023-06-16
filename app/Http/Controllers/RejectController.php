<?php

namespace App\Http\Controllers;

use App\Models\Reject;
use App\Models\Appointment;
use Illuminate\Http\Request;

class RejectController extends Controller
{
    public function rejectList(){
        $data=Reject::paginate(7);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.reject.rejectList')->with(['rejects'=>$data,'status'=>$emptyStatus]);

    }
    public function reject($id){
        $result=Appointment::select('*')->where('appointment_id',$id)->first();
        $data=[
            'name'=> $result->name,
            'email'=>$result->email,
            'department'=>$result->department,
            'date'=>$result->date,
            'number'=>$result->number,
            'message' => $result->message,

        ];
        Reject::create($data);
        // return view('admin.appointment.appointmentList')->with(["success"=>"Appointment canceled!....."]);
    }

    public function seemoreReject($id,Request $request){
        // $data=Accept::where('appointment_id',$id)->first();

        // return view('admin.doctor.info')->with(['doctors' => $data]);
    }




}
