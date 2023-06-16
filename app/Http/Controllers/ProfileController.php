<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function profile(){
        return view('userProfile.profile');
    }
    public function changePwd(){

        return view('userProfile.changePwd');
    }
    public function updatePwd(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'oldPwd'=>'required',
            'newPwd' => 'required',
            'confirmPwd' => 'required',
        ]);
        if($validator -> fails()){
            return back()->withErrors($validator)
                         ->withInput();
        }
      #Match the old pwd
      if(!Hash :: check($request->oldPwd,Auth::user()->password)){
        return back()->with("error","Old password is not correct!..");
      }
      if($request->newPwd != $request->confirmPwd){
        return back()->with("error","New Password and confirm password must match!...");
    }
    if(strlen($request->newPwd) < 6 &&  strlen($request->confirmPwd) < 6){
        return back()->with("error","Password must have six character!...");
    }

      else{
        User::where('user_id',$id)->update([
            'password' => Hash::make($request -> newPwd)
          ]);
          return back()->with("status","Password changed successfully!..");
      }

    }
    public function edit(Request $request)
    {
        return view('userProfile.edit');
    }
    public function editImg($id,Request $request){
        // $data=User::where('appointment_id',$id)->first();
        // $data=['status' => 1,];
        // User::where('appointment_id','=',$id)->update($data);

        if(isset($request->image)){
            // //get old img name
            // $oldImg = User::select('image')->where('user_id',$id)->first();
            // $oldFileName =$oldImg['image'];

            // //delete old img
            //  if(File::exists(public_path().'/admin/assets/userImg/'.$oldFileName)){
            //   File::delete(public_path().'/admin/assets/userImg/'.$oldFileName);
            //  }
             //get new
             $file = $request->image;

             $fileName=uniqid().'_'.$file->getClientOriginalName();

             $file->move(public_path().'/admin/assets/userImg/',$fileName);
            $data['image'] =$fileName;

         }
             User::where('user_id','=',$id)->update($data);
            return back()-> with(['Success' => "Profile image edited!......"]);

    }

    /**
     * Update the user's profile information.
     */
    public function update($id,Request $request)
    {
        $data = [
            'name'=> $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        User::where('user_id','=',$id)->update($data);
        return back()->with(['Success'=>'Profile Updated!']);
    }

    /**
     * Delete the user's account.
     */

}
