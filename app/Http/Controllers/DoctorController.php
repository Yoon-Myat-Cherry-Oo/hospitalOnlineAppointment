<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function doctorList(){
        $data=Doctor::paginate(5);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.doctor.doctorList')->with(['doctors'=>$data,'status'=>$emptyStatus]);

    }

    public function newDoctor(){
        return view('admin.doctor.newDoctor');
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'doctorName'=>'required',
            'doctorPhone'=>'required',
            'doctorPhoto'=>'required',
            'department'=>'required',
            'doctorAge'=>'required',
            'gender'=>'required',
            'doctorQua'=>'required',
            'duty'=>'required',
           ]);

           if($validator->fails()){
             return back()
                          ->withErrors($validator)
                          ->withInput();
           }
        $data=[
            'name'=> $request->doctorName,
            'phone'=>$request->doctorPhone,
            'department'=>$request->department,
            'age'=>$request->doctorAge,
            'gender'=>$request->gender,
            'qualification' => $request->doctorQua,
            'duty'=>$request->duty,

        ];
        $file = $request->doctorPhoto;
        $fileName=uniqid().'_'.$file->getClientOriginalName();
         $file->move(public_path().'/admin/doctor/',$fileName);
        $data['photo'] =$fileName;

        $item=Doctor::create($data);

         return redirect()->route('doctorList') -> with(['createSuccess' => "Adding Success!......"]);

    }

     public function search(Request $request){
         $searchKey = $request->table_search;
         $searchData=Doctor::orWhere('name','like','%'.$searchKey.'%')
                          ->orWhere('department',$searchKey)
                          ->paginate(7);
         if(count($searchData) == 0){
             $emptyStatus = 0;
         }else{
             $emptyStatus =1;
         }
         return view('admin.doctor.doctorList')
         ->with(['doctors'=>$searchData,'status'=>$emptyStatus]);
     }

     public function delete($id){
        $data=Doctor::select('photo')->where('doctor_id',$id)->first();
        $fileName=$data['photo'];
        Doctor::where('doctor_id',$id)->delete();
        if(File::exists(public_path().'/admin/doctor/'.$fileName)){
            File::delete(public_path().'/admin/doctor/'.$fileName);
        }
        return back()->with(['deleteSuccess'=>'Delete Success!.......']);

     }

     public function edit($id){

        $data=Doctor::where("doctor_id", "=" ,$id)->first();
        return view('admin.doctor.doctorEdit')->with(['doctors'=>$data]);
    }

    public function update($id,Request $request){
        $validator = Validator::make($request->all(),[
            'doctorName'=>'required',
            'doctorPhone'=>'required',
            'doctorPhoto'=>'required',
            'department'=>'required',
            'doctorAge'=>'required',
            'gender'=>'required',
            'doctorQua' => 'required',
            'duty'=>'required',
           ]);

           if($validator->fails()){
             return back()
                          ->withErrors($validator)
                          ->withInput();
           }
        $data=[
            'name' => $request->doctorName,
            'phone' => $request->doctorPhone,
            'department' => $request->department,
            'age' => $request->doctorAge,
            'gender'=>$request->gender,
            'qualification' => $request->doctorQua,
            'duty'=>$request->duty,

           ];

           if(isset($request->doctorPhoto)){
           //get old img name
           $oldImg = Doctor::select('photo')->where('doctor_id',$id)->first();
           $oldFileName =$oldImg['photo'];

           //delete old img
            if(File::exists(public_path().'/admin/doctor/'.$oldFileName)){
             File::delete(public_path().'/admin/doctor/'.$oldFileName);
            }
            //get new
            $file = $request->file('doctorPhoto');
            $fileName=uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path().'/admin/doctor/',$fileName);
           $data['photo'] =$fileName;

        }
            Doctor::where('doctor_id','=',$id)->update($data);
            return redirect()->route('doctorList') -> with(['updateSuccess' => "Edit Success!......"]);
    }

    public function seemore($id){
        $data=Doctor::where('doctor_id',$id)->first();

        return view('admin.doctor.info')->with(['doctors' => $data]);
    }
}
