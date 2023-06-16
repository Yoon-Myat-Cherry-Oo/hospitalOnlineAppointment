@extends('layouts.admin')
@php
$data=App\Models\Appointment::latest()->get();
$doctorCount = App\Models\Doctor::get()->count();
$appointmentCount=App\Models\Appointment::get()->count();
$patientCount=App\Models\Appointment::where('status',1)->get()->count();
$newCount=App\Models\News::get()->count();
@endphp
@section('style')
<style>
    #grey{
        background: #bdc3c7;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    #delicate{
        background: #D3CCE3;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    #beyond{
        background: #F0F2F0;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #000C40, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    #ath{
        background: #649173;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #DBD5A4, #649173);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #DBD5A4, #649173); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    #almost{
        background: #ddd6f3;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #faaca8, #ddd6f3);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #faaca8, #ddd6f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>

@endsection
@section('content')

<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.03);">
<div class="row   my-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card ">
        <h1 class="" style="background-color: rgba(0, 0, 0, 0.03);">Welcome {{ Auth::user()->name }} !</h1>

      </div>
    </div>

</div>

<div class="row   my-3 mx-3">
    <div class="col-md-3 col-lg-3 col-sm-3">
        <div class="card" id="almost">

            <div class="card-body p-0 text-center">
                <i class="mdi mdi-48px mdi-doctor "></i>
              <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 py-1"><h1 class="">Doctors</h1></div>
                <div class="col-md-4 col-lg-4 col-sm-4 py-1"><h1 class="">{{ $doctorCount }}</h1></div>

              </div>
            </div>
          </div>
    </div>

    <div class="col-md-3 col-lg-3 col-sm-3">
        <div class="card" id="almost">

            <div class="card-body p-0 text-center">
                <i class="mdi mdi-48px mdi-account-outline menu-icon"></i>
              <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 py-1"><h1 class="">Patients</h1></div>
                <div class="col-md-4 col-lg-4 col-sm-4 py-1"><h1 class="">{{ $patientCount }}</h1></div>

              </div>
            </div>
          </div>
    </div>

    <div class="col-md-3 col-lg-3 col-sm-3">
        <div class="card" id="almost">

            <div class="card-body p-0 text-center">
                <i class="mdi mdi-48px mdi-calendar menu-icon"></i>
              <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 py-1"><h1 class="">Appointments</h1></div>
                <div class="col-md-4 col-lg-4 col-sm-4 py-1"><h1 class="">{{ $appointmentCount }}</h1></div>

              </div>
            </div>
          </div>
    </div>

    <div class="col-md-3 col-lg-3 col-sm-3">
        <div class="card" id="almost">

            <div class="card-body p-0 text-center">
                <i class="mdi mdi-48px mdi-newspaper menu-icon"></i>
              <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 py-1"><h1 class="">News</h1></div>
                <div class="col-md-4 col-lg-4 col-sm-4 py-1"><h1 class="">{{ $newCount }}</h1></div>

              </div>
            </div>
          </div>
    </div>

</div>

{{-- <div class="row my-3" style="background-color: rgba(0, 0, 0, 0.03);"> --}}
    <div class="row my-5 mx-3">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Recent Appointments</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Phone</th>
                      <th> Department</th>
                      <th> Date </th>
                    </tr>
                  </thead>
                  <tbody class="py-5">
                    @foreach ($data as $appointment )
                    <tr>

                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>
                            @if($appointment->department == "general")General Hearth
                            @elseif($appointment->department == "cardiology")Cardiology
                            @elseif($appointment->department == "dental")Dental
                            @elseif($appointment->department == "orthopaedics")Orthopaedics
                            @elseif($appointment->department == "neurology")Neurology
                            @elseif($appointment->department == "obsteetrics & Gynaecology")Obsteetrics & Gynaecology
                            @elseif($appointment->department == "oncology")Oncology
                            @elseif($appointment->department == "paediatrics")Paediatrics
                            @elseif($appointment->department == "hepatobiliary")Hepatobiliary
                            @elseif($appointment->department == "anaethesiology")Anaethesiology
                            @elseif($appointment->department == "radiology")Radiology
                            @elseif($appointment->department == "mental")Mental Health
                            @elseif($appointment->department == "ent")Ear, Eye & Throat

                            @endif

                        </td>
                        <td>
                         {{ \Carbon\Carbon::parse($appointment->date)->format('d')}}-
                         {{ \Carbon\Carbon::parse($appointment->date)->format('M')}}-
                         {{ \Carbon\Carbon::parse($appointment->date)->format('Y') }},
                         {{ \Carbon\Carbon::parse($appointment->date)->format('g:')}}
                         {{ \Carbon\Carbon::parse($appointment->date)->format('s')}}
                         {{ \Carbon\Carbon::parse($appointment->date)->format('A')}}
                        </td>
                        {{-- <td>{{ $appointment->number }}</td> --}}
                        {{-- <td>
                            @if($appointment->status == 0)  In Progress
                            @elseif($appointment->status == 1)  Approved
                            @elseif($appointment->status == 2) Rejected
                            @endif
                        </td>
                        <td>{{ $appointment->message }}</td>
                        <td>
                          <a href="{{ route('cancelList',$appointment->appointment_id) }}">
                              <button class="btn btn-sm" style="background-color: red;" name="rejected" >Cancel</button></a>
                        </td> --}}
                      </tr>


                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- </div> --}}


</div>
@endsection
