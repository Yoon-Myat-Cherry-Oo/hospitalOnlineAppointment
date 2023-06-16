@extends('layouts.admin')
@section('content')
@section('style')
<style>
    #green{
        background: linear-gradient(110.1deg, rgb(34, 126, 34) 2.9%, rgb(168, 251, 60) 90.3%);

    }
    #red{
        background: radial-gradient(circle at 10% 20%, rgb(255, 197, 118) 0%, rgb(254, 106, 103) 47.7%, rgb(240, 23, 23) 92.3%);

    }

</style>
@endsection
<div class="container-fluid g-0 class1 mx-4">
    <div class="row" id="row1" >

        <div class="card mt-3 col-lg-12 col-md-12 col-sm-12 class3 px-3 " id="card1">
            <div class="card-header text-center fs1 bolder">
                <div>
                    @if (Session::has('Success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('Success') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif

                </div>
                <h1 class="font-bolder">Requested List</h1>
                <div class="py-3">
                    {{-- <div class="float-start">
                        <a href="{{ route('acceptList') }}" ><button  type="submit" class="btn btn-primary px-1 mx-3 bg-success">
                            Accepted List
                           </button></a>
                           <a href="{{ route('rejectList') }}" ><button  type="submit" class="btn btn-primary px-1 mx-3 bg-danger">
                            Canceled List
                           </button></a>
                    </div> --}}
                    <div class="card-tools float-end">
                        <form action="{{ route('searchAppointment') }}" method="POST">
                           @csrf

                           <div class="input-group text-end">
                            <div class="form-outline">
                                 <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search by name" name="table_search"/>
                               </div>
                               <button id="search-button" type="submit" class="btn btn-sm btn-primary">
                                 <i class="fas fa-search"></i>
                               </button>
                             </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="card-body" id="cardBody" style="
                    -webkit-box-flex: 1;
                    -ms-flex: 0 0 0;
                    flex: 1 1 auto;
                    padding: 0rem 0rem;
                    overflow:scroll;
               ">
                <table class="g-0 table table-responsive table-bordered table-striped table-hover">

                    <thead>
                     <tr>
                         <th>No</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Department</th>
                         <th>Date</th>
                         {{-- <th>Doctor Name</th> --}}

                     </tr>
                    </thead>
                    <tbody>
                      @if($status == 0)
                     <tr>
                       <td colspan="7">
                        <small class="text-muted">There is no data</small>

                       </td>
                     </tr>
                     @else
                     @foreach ($appointments as $appointment )

                       @if ($appointment->status == 1)
                       <tr id="green">
                        <td>{{ $loop->iteration }}</td>
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
                            @elseif($appointment->department == "surgery")Surgery
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
                        {{-- <td>{{ $appointment->doctorName}}</td> --}}


                        <td>
                        <a href="{{ route('accept',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="approved" ><i class="fas fa-check-circle"></i></button></a>
                        <a href="{{ route('reject',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="rejected" ><i class="fas fa-times-circle"></i></button></a>
                        </td>
                       </tr>
                       @elseif ($appointment->status == 2)
                       <tr id="red">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>
                            @if($appointment->department == "general")General Health
                            @elseif($appointment->department == "cardiology")Cardiology
                            @elseif($appointment->department == "dental")Dental
                            @elseif($appointment->department == "orthopaedics")Orthopaedics
                            @elseif($appointment->department == "neurology")Neurology
                            @elseif($appointment->department == "obsteetrics & Gynaecology")Obsteetrics & Gynaecology
                            @elseif($appointment->department == "oncology")Oncology
                            @elseif($appointment->department == "paediatrics")Paediatrics
                            @elseif($appointment->department == "hepatobiliary")Hepatobiliary
                            @elseif($appointment->department == "anaethesiology")Anaethesiology
                            @elseif($appointment->department == "surgery")Surgery
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

                        <td>
                        <a href="{{ route('accept',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="approved" ><i class="fas fa-check-circle"></i></button></a>
                        <a href="{{ route('reject',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="rejected" ><i class="fas fa-times-circle"></i></button></a>
                        </td>
                       </tr>
                       @else
                       <tr>
                        <td>{{ $loop->iteration }}</td>
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
                            @elseif($appointment->department == "surgery")Surgery
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


                           <td>
                          <a href="{{ route('accept',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="approved" ><i class="fas fa-check-circle"></i></button></a>
                          <a href="{{ route('reject',$appointment->appointment_id) }}"><button class="btn btn-sm  text-black" name="rejected" ><i class="fas fa-times-circle"></i></button></a>
                          </td>
                       </tr>
                       @endif

                     @endforeach
                      @endif
                    </tbody>

                </table>
                 <div>
                   {{ $appointments->links() }}
                 </div>
            </div>

        </div>
           <!--col end -->

    </div>
    <!--row end -->
</div>
@endsection

