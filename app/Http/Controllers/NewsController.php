<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class NewsController extends Controller
{
    public function newList(){
        $data=News::paginate(5);
        if(count($data) == 0){
            $emptyStatus = 0;
        }
        else{
            $emptyStatus = 1;
        }
        return view('admin.news.listNews')->with(['newss'=>$data,'status'=>$emptyStatus]);

    }

    public function newNews(){
        $user = User::get();
        return view('admin.news.newNews')->with(['users'=>$user]);
    }

    public function create(Request $request){

        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
            'photo'=>'required',
           ]);

           if($validator->fails()){
             return back()
                          ->withErrors($validator)
                          ->withInput();
           }

        $data=[
            'category'=>$request->category,
            'title'=> $request->title,
            'description'=>$request->description,
            'user_id' => Auth::user()->user_id,

        ];
        $file = $request->photo;
        $fileName=uniqid().'_'.$file->getClientOriginalName();
         $file->move(public_path().'/admin/news/',$fileName);
        $data['photo'] =$fileName;

        News::create($data);
        return redirect()->route('newsList') -> with(['createSuccess' => "Adding Success!......"]);


    }

      public function search(Request $request){
         $searchKey = $request->table_search;
         $searchData=News::where('title','like','%'.$searchKey.'%')
                        //   ->orWhere('department',$searchKey)
                           ->paginate(7);
         if(count($searchData) == 0){
              $emptyStatus = 0;
         }else{
            $emptyStatus =1;
         }
         return view('admin.news.listNews')->with(['newss'=>$searchData,'status'=>$emptyStatus]);
     }

     public function delete($id){
        $data=News::select('photo')->where('news_id',$id)->first();
        $fileName=$data['photo'];
        News::where('news_id',$id)->delete();
        if(File::exists(public_path().'/admin/news/'.$fileName)){
            File::delete(public_path().'/admin/news/'.$fileName);
        }
        return back()->with(['deleteSuccess'=>'Delete Success!.......']);

     }

     public function edit($id){

        $data=News::where("news_id", "=" ,$id)->first();
        return view('admin.news.editNews')->with(['newss'=>$data]);
    }

    public function update($id,Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
            'photo'=>'required',
           ]);

           if($validator->fails()){
             return back()
                          ->withErrors($validator)
                          ->withInput();
           }
           $data=[
            'title'=> $request->title,
            'category'=>$request->category,
            'description'=>$request->description,


        ];

           if(isset($request->photo)){
           //get old img name
           $oldImg = News::select('photo')->where('news_id',$id)->first();
           $oldFileName =$oldImg['photo'];

           //delete old img
            if(File::exists(public_path().'/admin/news/'.$oldFileName)){
             File::delete(public_path().'/admin/news/'.$oldFileName);
            }
            //get new
            $file = $request->file('photo');
            $fileName=uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path().'/admin/news/',$fileName);
           $data['photo'] =$fileName;

        }
            News::where('news_id','=',$id)->update($data);
            return redirect()->route('newsList') -> with(['updateSuccess' => "Edit Success!......"]);
    }

    public function seemore($id){
        $data=News::where('news_id',$id)->first();

        return view('admin.news.infoNews')->with(['newss' => $data]);
    }
    public function readMore($id){
        $data=News::where('news_id',$id)->first();

        return view('admin.news.readMore')->with(['newss' => $data]);

    }
}
