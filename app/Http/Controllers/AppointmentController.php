<?php

namespace App\Http\Controllers;

use App\Models\Accept;
use App\Models\cancel;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function appointmentList(){
        // $data=Appointment::get();
        // dd($data);
        $data=Appointment::paginate(8);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.appointment.appointmentList')->with(['appointments'=>$data,'status'=>$emptyStatus]);

    }

    public function save(Request $request){
        $validator = Validator::make($request->all(),[
            // 'name'=>'required',
            // 'email'=>'required',
            'date'=>'required',
            'department'=>'required',

            'message' => 'required',
             'phone'=>'required',

           ]);

           if($validator->fails()){
             return back()
                          ->withErrors($validator)
                          ->withInput();
           }
        $data=[
            'name'=> Auth::user()->name,
            'email'=>Auth::user()->email,
            'department'=>$request->department,
            'date'=>$request->date,
            'doctor_name'=>$request->doctorName,
            'number'=>1,
            'message' => $request->message,
            'phone'=>$request->phone,
            'user_id'=>Auth::user()->user_id,

        ];

        Appointment::create($data);
        return view('User.index')->with(['Success'=>"Your appointment request is send successfully!"]);
    }
    public function search(Request $request){
        $searchKey = $request->table_search;
        $searchData=Appointment::orWhere('name','like','%'.$searchKey.'%')
                         ->orWhere('department',$searchKey)
                         ->paginate(7);
        if(count($searchData) == 0){
            $emptyStatus = 0;
        }else{
            $emptyStatus =1;
        }
        return view('admin.appointment.appointmentList')->with(['appointments'=>$searchData,'status'=>$emptyStatus]);
    }

    public function accept($id){
        $data=Appointment::where('appointment_id',$id)->first();
        $data=['status' => 1,];
        Appointment::where('appointment_id','=',$id)->update($data);

        return back()->with(['Success'=>'Appointment Approved!....']);

    }
    public function reject($id){
        $data=Appointment::where('appointment_id',$id)->first();
        $data=['status' => 2,];
        Appointment::where('appointment_id','=',$id)->update($data);


        return back()->with(['Success'=>'Appointment Rejected!....']);

    }

    public function cancel($id){
        $data=Appointment::where('appointment_id',$id)->delete();

        return back()->with(['Success'=>'Your appointment is canceled!...']);

     }
}
