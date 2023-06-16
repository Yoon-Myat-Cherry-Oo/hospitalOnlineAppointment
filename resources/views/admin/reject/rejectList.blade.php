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
                <h1 class="font-bolder">Rejected List</h1>
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
                     @foreach ($rejects as $reject )
                     <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $reject->name }}</td>
                       <td>{{ $reject->email }}</td>
                     <td>
                        @if($reject->department == "general")General Hearth
                        @elseif($reject->department == "cardiology")Cardiology
                        @elseif($reject->department =="dental")Dental
                        @elseif($reject->department == "neurology")Neurology
                        @elseif($reject->department =="orthopaedics")Orthopaedics
                        @endif

                     </td>
                     <td>{{ $reject->date }}</td>
                     <td>{{ $reject->number }}</td>
                     <td>{{ $reject->message }}</td>

                     <td>
                       <a href="{{ route('seemoreReject',$reject->reject_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-eye"></i></button></a>
                       <a href="{{ route('editReject',$reject->reject_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-edit"></i></button></a>
                       <a href="{{ route('deleteReject',$reject->reject_id) }}"><button class="btn btn-sm  text-black"><i class="fas fa-trash"></i></button></a>
                    </td>
                     </tr>
                     @endforeach
                      @endif
                    </tbody>

                </table>
                 <div>
                   {{ $rejects->links() }}
                 </div>
            </div>

        </div>
           <!--col end -->

    </div>
    <!--row end -->
</div>


@endsection
