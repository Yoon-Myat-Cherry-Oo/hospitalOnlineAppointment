@extends('layouts.admin')
@section('content')
<div class="container-fluid g-0 class1">
    <div class="row" id="row1" >

        <div class="card mt-3 col-lg-12 col-md-12 col-sm-12 class3 px-5" id="card1">
            <div class="card-header text-center fs1 bolder">
                <div>
                    @if (Session::has('createSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('createSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif
                    @if (Session::has('updateSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('updateSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                    @endif
                    @if (Session::has('deleteSuccess'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('deleteSuccess') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        </button>
                      </div>
                    @endif
                </div>
                <a href="{{ route('appointmentList') }}">
                    <button class="btn btn-sm  text-black float-start"><i class="fas fa-arrow-left"></i></button></a>

                <h1 class="font-bolder">Accepted List</h1>
                <div class="py-3">
                    <div class="card-tools float-end">
                        <form action="{{ route('searchAccept') }}" method="POST">
                           @csrf
                           <div class="input-group text-end">
                               <div class="form-outline">
                                 <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search" name="table_search"/>
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
               ">
                <table class="g-0 table table-responsive table-bordered table-striped table-hover">

                    <thead>
                     <tr>
                         <th>No</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Department</th>
                         <th>Date</th>
                         <th>Number</th>
                         <th>Message</th>
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
                     @foreach ($accepts as $accept )
                     <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $accept->name }}</td>
                       <td>{{ $accept->email }}</td>
                     <td>
                        @if($accept->department == "general")General Hearth
                        @elseif($accept->department == "cardiology")Cardiology
                        @elseif($accept->department =="dental")Dental
                        @elseif($accept->department == "neurology")Neurology
                        @elseif($accept->department =="orthopaedics")Orthopaedics
                        @endif

                     </td>
                     <td>{{ $accept->date }}</td>
                     <td>{{ $accept->number }}</td>
                     <td>{{ $accept->message }}</td>

                     <td>
                       <a href="{{ route('seemoreAccept',$accept->accept_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-eye"></i></button></a>
                       <a href="{{ route('editAccept',$accept->accept_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-edit"></i></button></a>
                       <a href="{{ route('deleteAccept',$accept->accept_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-trash"></i></button></a>
                    </td>
                     </tr>
                     @endforeach
                      @endif
                    </tbody>

                </table>
                 <div>
                   {{ $accepts->links() }}
                 </div>
            </div>

        </div>
           <!--col end -->

    </div>
    <!--row end -->
</div>


@endsection
