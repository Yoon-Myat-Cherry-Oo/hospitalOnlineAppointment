@php

@endphp
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
      @if (Session::has('message'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ Session::get('message') }}
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
          </button>
        </div>
      @endif
       <form class="main-form" action="{{ route('requestAppointment') }}" method="POST">

        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ Illuminate\Support\Facades\Auth::user()->name }} " disabled>
            @if($errors->has('name'))
              <p class='text-danger'>{{ $errors->first('name') }}</p>
              @endif
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email" value="{{Illuminate\Support\Facades\Auth::user()->email }} " disabled>
            @if($errors->has('email'))
              <p class='text-danger'>{{ $errors->first('email') }}</p>
              @endif
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="datetime-local" class="form-control" name="date" value="{{ old('date') }}">
            @if($errors->has('datetime'))
              <p class='text-danger'>{{ $errors->first('date') }}</p>
              @endif
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="number" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phoneNumber') }}">
            @if($errors->has('phone'))
              <p class='text-danger'>{{ $errors->first('phone') }}</p>
              @endif
          </div>

         <div class="col-6 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Enter doctor name(optional)" name="doctorName" value="{{ old('doctorName') }}">
            @if($errors->has('doctorName'))
              <p class='text-danger'>{{ $errors->first('doctorName') }}</p>
              @endif
          </div>
          <div class="col-6 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="department" id="department" class="custom-select">
              <option value="empty" selected>Please Select Speciality</option>
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
              <option value="obsteetrics">Obsteetrics & Gynaecology</option>
              <option value="oncology">Oncology</option>
              <option value="paediatrics">Paediatrics</option>
              <option value="hepatobiliary">Hepatobiliary</option>
              <option value="anaethesiology">Anaethesiology</option>
              <option value="surgery">Surgery</option>
              <option value="mental">Mental Health</option>
              <option value="ent">Ear, Eye & Throat</option>

            </select>
            @if($errors->has('department'))
              <p class='text-danger'>{{ $errors->first('department') }}</p>
              @endif
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms" >
            <textarea name="message" id="message" class="form-control" value="{{ old('message') }}" rows="6" placeholder="Enter message.."></textarea>
            @if($errors->has('message'))
              <p class='text-danger'>{{ $errors->first('message') }}</p>
              @endif
        </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        {{-- @if(Route::has('login'))
        @auth
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        @else
        <p class="text-warning bolder">Please login to make appointment</p>
        @endauth
        @endif--}}
      </form>
    </div>
  </div>
