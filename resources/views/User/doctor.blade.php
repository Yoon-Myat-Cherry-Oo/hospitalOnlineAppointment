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
   <!-- .bg-light -->

  {{-- @include('partials.doctor') --}}
  @php
  $doctors = App\Models\Doctor :: paginate(9);
//   $generalDoctors = App\Models\Doctor :: select('*')->where('department',1)->get();
//   $generalChunks  = $generalDoctors->chunk(3);

//   $cardioDoctors = App\Models\Doctor :: select('*')->where('department',2)->get();
//   $cardioChunks  = $cardioDoctors->chunk(3);

//   $dentalDoctors = App\Models\Doctor :: select('*')->where('department',3)->get();
//   $dentalChunks  = $dentalDoctors->chunk(3);

//   $neuroDoctors = App\Models\Doctor :: select('*')->where('department',4)->get();
//   $neuroChunks  = $neuroDoctors->chunk(3);

//   $orthoDoctors = App\Models\Doctor :: select('*')->where('department',5)->get();
//   $orthoChunks  = $orthoDoctors->chunk(3);
@endphp
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      {{-- <div class="owl-carousel wow fadeInUp" id="doctorSlideshow"> --}}
        <div class="row">


        @foreach ($doctors as $doctor)
        <div class="item col-md-4 col-lg-4">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ asset('admin/doctor/'.$doctor->photo) }}" alt="">
              {{-- <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div> --}}
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
                     @elseif($doctor->department == 10)Surgery
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
        </div>
        <div class="float-end">
            {{ $doctors->links() }}
        </div>


      {{-- </div> --}}




    </div>


</div>





 {{-- @include('partials.get') <!-- .banner-home --> --}}


  @endsection


