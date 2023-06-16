
@extends('layouts.master')
@section('content')
@section('style')
<style>
   #home{
    color:#d2f547;
    font-weight: bold;
   }
   element.style {

    }
</style>
@endsection
<div class="page-section bg-light">
    <div class="container">
      <h2 class="text-center wow fadeInUp">Which doctor you're looking for ?</h2>

        {{-- <form action="{{ route('user.searchDoctor') }}" method="POST">
            @csrf
            <div class="input-group text-end">
                <h5 class="py-2 px-3">Doctor Name</h5>
                <div class="form-outline">
                  <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search" name="table_search"/>
                </div>
                <button id="search-button" onclick="showDoctor()" type="submit" class="btn btn-sm btn-primary">
                  <i class="fas fa-search"></i>
                </button>
              </div>
       </form> --}}

       <form action="{{route('resultDoctor')}}" method="POST" enctype='multipart/form-data'>
        @csrf
         <div class="row">
            <div class="col-12 col-sm-5 py-2 wow fadeInLeft">
                <label for="doctorName">Name</label>
               <input type="text" name="doctorName" value="{{ old('doctorName') }}" class="form-control" id="doctorName">
                @if($errors->has('doctorName'))
                  <p class='text-danger'>{{ $errors->first('doctorName') }}</p>
                  @endif
            </div>
            <div class="col-12 col-sm-5 py-2 wow fadeInRight" data-wow-delay="300ms">
                <label for="doctorPhone">Department</label>
                <select name="department" class="form-control" id="department">
                    <option value="empty" selected disabled>Please Select</option>
                    <option value="1" >General Health</option>
                    <option value="2">Cardiology</option>
                    <option value="3">Dental</option>
                    <option value="4">Orthopaedics</option>
                    <option value="5">Obsteetrics & Gynaecology</option>
                      <option value="6">Oncology</option>
                      <option value="7">Paediatrics</option>
                      <option value="8">Hepatobiliary</option>
                      <option value="9">Anaethesiology</option>
                      <option value="10">Radiology</option>
                      <option value="11">Mental Health</option>
                      <option value="12">Ear, Eye & Throat</option>
                </select>

                @if($errors->has('department'))
                  <p class='text-danger'>{{ $errors->first('department') }}</p>
                  @endif
            </div>
            <div class="col-12 col-sm-1  float-end pb-5">
            <button class="btn btn-success" type="submit" style="margin: 0;
            position: absolute;
            top: 90%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-0%, -100%);" >Find</button>
            </div>


        </div>


       </form>

         <div class="mt-3 pt-3">
            @if($status == 0)

            <h5 class="text-muted text-center py-2">There is no doctor to show</h5>


           @else
           <div class="row">


             @foreach ($doctors as $doctor)
             <div class="item col-md-4 col-lg-4">
               <div class="card-doctor">
                 <div class="header">
                   <img src="{{ asset('admin/doctor/'.$doctor->photo) }}" alt="">

                 </div>
                 <div class="body">
                   <p class="text-xl mb-0">{{ $doctor->name }}</p>

                     <div class="text-sm text-grey">
                         @if($doctor->department == 1)General Hearth
                         @elseif($doctor->department == 2)Cardiology
                         @elseif($doctor->department == 3)Dental
                         @elseif($doctor->department == 4)Orthopaedics
                         @elseif($doctor->department == 5)Obsteetrics & Gynaecology
                         @elseif($doctor->department == 6)Oncology
                         @elseif($doctor->department == 7)Paediatrics
                         @elseif($doctor->department == 8)Hepatobiliary
                         @elseif($doctor->department == 9)Anaethesiology
                         @elseif($doctor->department == 10)Radiology
                         @elseif($doctor->department == 11)Mental Health
                         @elseif($doctor->department == 12)Ear, Eye & Throat

                         @endif
                     </div>
                     <a href="{{ route('seeMore',$doctor->doctor_id) }}">
                     <span class="btn btn-sm bg-primary px-1 py-1 my-1 text-sm">See More</span>
                 </a>



                 </div>
               </div>
               </div>
                @endforeach
                @endif
             </div>
             {{-- <div class="float-end">
                 {{ $doctors->links() }}
             </div> --}}
        </div>



    </div>
</div>

{{--
 @include('partials.get') <!-- .banner-home -->
 --}}

  @endsection


