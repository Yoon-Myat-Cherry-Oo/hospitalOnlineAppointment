@extends('layouts.master')
@section('content')
@section('style')
<style>
   #doctor{
    color:#96C93D;
    font-weight: bold;
   }
</style>
@endsection
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">{{ $doctors->name }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">

                <img class=" rounded text-center mx-auto d-block img-fluid px-3"
                src="{{ asset('admin/doctor/'.$doctors->photo) }}" style="aspect-ratio: 1 / 1;">


        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 g-0">
            <form action="" method="" class="mx-3 mt-0">
                @csrf

                <div class="row my-2 py-2 form-group">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    Department :
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="text" name="name" class="form-control"
                    @if($doctors->department == 1)value= "General Hearth"
                    @elseif($doctors->department == 2)value= "Cardiology"
                    @elseif($doctors->department == 3)value= "Dental"
                    @elseif($doctors->department == 4)value= "Orthopaedics"
                    @elseif($doctors->department == 5)value= "Obsteetrics & Gynaecology"
                    @elseif($doctors->department == 6)value= "Oncology"
                    @elseif($doctors->department == 7)value= "Paediatrics"
                    @elseif($doctors->department == 8)value= "Hepatobiliary"
                    @elseif($doctors->department == 9)value= "Anaethesiology"
                    @elseif($doctors->department == 10)value= "Surgery"
                    @elseif($doctors->department == 11)value= "Mental Health"
                    @elseif($doctors->department == 12)value= "Ear, Eye & Throat"

                    @endif

                     disabled>
                </div>
                </div>

                <div class="row my-2 py-2 form-group">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    Qualification :
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="text" name="doctorQua" class="form-control" value="{{ $doctors->qualification}}" disabled>
                </div>
                </div>

                <div class="row my-2 py-2 form-group">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        Duty :
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <input type="text" name="duty" class="form-control" value="{{ $doctors->duty}}" disabled>
                    </div>
                    </div>


                <div class="row my-2 py-2 form-group">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    Gender :
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="integer" name="phone" class="form-control"
                    @if($doctors->gender == 1)value="Male"
                    @elseif($doctors->gender == 2) value="Female"
                    @endif
                     disabled>
                </div>
                </div>

                <div class="row my-2 py-2 form-group">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        Age :
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <input type="text" name="age" class="form-control" value="{{ $doctors->age}}" disabled>
                    </div>
                    </div>

                {{-- <div class="row my-2 py-2 form-group">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    Age :
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <input type="text" name="address" class="form-control" value="{{ $doctors->age }}" disabled>
                </div>
                </div> --}}






            </form>
        </div>

        <div class="">
            <a href="{{ route('user.doctor') }}">
                <button type="btn btn-sm" class="bg-primary py-1 my-3 mx-3 px-1">Back</button> </a>

        </div>
    </div>
</div>



 {{-- @include('partials.get') <!-- .banner-home --> --}}


  @endsection
