<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('admin.doctor.index');
    }
    public function overView(){
        return view('admin.overView.index');
    }

}
